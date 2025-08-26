<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    // Show upload form
    public function index()
    {
        return view('upload'); // points to resources/views/upload.blade.php
    }

    // Handle upload
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,mp4,mp3|max:20480',
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        return back()->with('success', 'File uploaded successfully!')->with('path', $path);
    }

    // List uploaded files
    public function fileList()
    {
        $files = [];
        $path = public_path('uploads'); // folder where uploaded files are stored

        if (is_dir($path)) {
            $allFiles = scandir($path);
            foreach ($allFiles as $file) {
                if ($file !== '.' && $file !== '..') {
                    $files[] = asset('uploads/' . $file);
                }
            }
        }

        return view('file_list', compact('files'));
    }
}
