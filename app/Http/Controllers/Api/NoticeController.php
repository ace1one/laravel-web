<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Traits\ApiResponse;


class NoticeController extends Controller
{
    use ApiResponse;

    public function getNotice(Request $request)
    {
        try {
            $notices = Notice::all();

            return $this->successResponse($notices, 'Notices fetched successfully');
        } catch (\Exception $e) {
            return $this->errorResponse('Failed to fetch notices', [
                'exception' => $e->getMessage(),
            ], 500);
        }
    }
}
