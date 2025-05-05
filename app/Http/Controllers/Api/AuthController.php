<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Traits\ApiResponse;
use Sentinel;

class AuthController extends Controller
{

    use ApiResponse;

    protected $sentinel;

    public function __construct(Sentinel $sentinel)
    {
        $this->sentinel = $sentinel;
    }


    public function login(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);

        if ($validator->fails()) {
            return $this->errorResponse('Validation failed', $validator->errors(), 422);
        }

        try {
            if ($user = Sentinel::authenticate($request->only(['email', 'password']))) {
                // Generate JWT token for the authenticated user
                $token = JWTAuth::fromUser($user);
                return $this->successResponse([
                    'user' => $user,
                    'token' => $token,
                ], 'Login successful', 200);
            }

            return $this->errorResponse('Invalid credentials', [], 401);
        } catch (\Exception $e) {
            return $this->errorResponse('Could not authenticate user', [], 500);
        }
    }

    /**
     * Get authenticated user details.
     */
    public function getUser()
    {
        $user = JWTAuth::user();
        return $this->successResponse($user, 'User retrieved successfully', 200);
    }

    /**
     * Log out and invalidate JWT token.
     */
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return $this->successResponse([], 'Logged out successfully', 200);
    }
}
