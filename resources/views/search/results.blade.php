@extends('layouts.app')

@section('content')
<div class="search-results">
    <h2>Search results for: "{{ $query }}"</h2>

    <!-- Users -->
    <div class="result-section">
        <h3>Accounts</h3>
        @if($users->isEmpty())
            <p>No users found.</p>
        @else
            <ul>
                @foreach($users as $user)
                    <li>
                        <a href="{{ route('profile', $user->id) }}">
                            {{ $user->name }} (@{{ $user->username }})
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <!-- Posts -->
    <div class="result-section">
        <h3>Posts (Videos, Music, Movies, News, Trends)</h3>
        @if($posts->isEmpty())
            <p>No posts found.</p>
        @else
            <div class="post-grid">
                @foreach($posts as $post)
                    <div class="post-card">
                        <h4>{{ $post->title }}</h4>
                        <p>{{ Str::limit($post->description, 100) }}</p>
                        <a href="{{ route('post.show', $post->id) }}">View Post</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
