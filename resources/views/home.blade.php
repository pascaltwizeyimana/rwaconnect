@extends('layout')

@section('content')
    <h2>Unified Feed</h2>
    
    <!-- Create Post Shortcut -->
    <div class="create-post" onclick="window.location='{{ route('post') }}'">
        <p>Click here to create a post ➕</p>
    </div>

    <!-- Example Feed Post -->
    <div class="post">
        <div class="post-header">
            <span class="avatar">Y</span>
            <span class="username">YVETTE NDIKUBWIMANA</span>
            <span class="time">2 days ago</span>
        </div>
        <p class="caption">wassup</p>
        <video controls>
            <source src="/storage/uploads/video.mp4" type="video/mp4">
        </video>
        <div class="actions">
            ❤️ Like  💬 Comment  🔄 Share
        </div>
    </div>
@endsection
