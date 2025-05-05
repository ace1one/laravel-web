<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notice;

class NoticeController extends Controller
{
    /**
     * Display a listing of notices for API or web.
     */
    public function index(Request $request)
    {
        $notices = Notice::all();

        if ($request->expectsJson()) {
            return response()->json([
                'status' => 'success',
                'data' => $notices,
            ], 200);
        }

        return view('admin.notice.index', compact('notices'));
    }

    /**
     * Store a newly created notice in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $notice = Notice::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Notice created successfully',
            'data' => $notice,
        ], 201);
    }

    /**
     * Display the specified notice.
     */
    public function show($id)
    {
        $notice = Notice::find($id);

        if (!$notice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Notice not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $notice,
        ], 200);
    }

    /**
     * Update the specified notice in storage.
     */
    public function update(Request $request, $id)
    {
        $notice = Notice::find($id);

        if (!$notice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Notice not found',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'published_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $notice->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Notice updated successfully',
            'data' => $notice,
        ], 200);
    }

    /**
     * Remove the specified notice from storage.
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

        if (!$notice) {
            return response()->json([
                'status' => 'error',
                'message' => 'Notice not found',
            ], 404);
        }

        $notice->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Notice deleted successfully',
        ], 200);
    }
}
