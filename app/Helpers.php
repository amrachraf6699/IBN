<?php

if(!function_exists('settings')) {
    function settings()
    {
        return \App\Models\Setting::first();
    }
}

if(!function_exists('uploadFile')) {
    function uploadFile($file, $path)
    {
        $fileName = \Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path("uploads/" . $path), $fileName);
        return "uploads/" . $path . '/' . $fileName;
    }
}

if(!function_exists('APIResponse')) {
    function APIResponse($status, $message, $data = null)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }
}