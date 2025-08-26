<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Show feed
    public function feed()
    {
        $posts = Post::with('user')->latest()->paginate(10);
        return view('dashboard', compact('posts'));
    }

    // Create a post (text + optional media)
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'nullable|string|max:1000',
            'media'   => 'nullable|file|mimes:jpg,jpeg,png,gif,mp4,mov,webm|max:20480', // 20MB
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $ext  = $request->file('media')->getClientOriginalExtension();
            $name = Str::uuid().'.'.$ext;
            $path = $request->file('media')->storeAs('posts', $name, 'public');
        }

        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
            'media'   => $path,
        ]);

        return back()->with('success', 'Post created!');
    }
}
if (!Auth::check()) {
    return redirect()->route('login')->withErrors('You must be logged in to post.');
}
