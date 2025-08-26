@extends('layouts.app')

@section('content')
<div class="layout">
    <!-- Left: Search + Compose -->
    <aside class="left">
        <div class="card">
            <input class="search" placeholder="Search">
        </div>

        <div class="card">
            <h3>Create a Post</h3>
            @if(session('success'))
                <div class="flash success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="flash error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <textarea name="content" rows="3" placeholder="Write a caption..."></textarea>
                <input type="file" name="media" />
                <button type="submit" class="btn-primary">Post</button>
            </form>
        </div>
    </aside>

    <!-- Center: Unified Feed -->
    <section class="center">
        <h2>Unified Chat Feed</h2>

        @forelse($posts as $post)
            <article class="post">
                <header class="post-header">
                    <div class="avatar">{{ substr($post->user->name,0,1) }}</div>
                    <div>
                        <div class="name">{{ $post->user->name }}</div>
                        <div class="time">{{ $post->created_at->diffForHumans() }}</div>
                    </div>
                </header>

                @if($post->content)
                    <p class="content">{{ $post->content }}</p>
                @endif

                @if($post->media)
                    @php
                        $isImage = Str::of($post->media)->lower()->endsWith(['.jpg','.jpeg','.png','.gif']);
                    @endphp
                    <div class="media">
                        @if($isImage)
                            <img src="{{ asset('storage/'.$post->media) }}" alt="media">
                        @else
                            <video controls>
                                <source src="{{ asset('storage/'.$post->media) }}" type="video/mp4">
                            </video>
                        @endif
                    </div>
                @endif

                <footer class="actions">
                    <button>❤️ Like</button>
                    <button>💬 Comment</button>
                    <button>🔄 Share</button>
                </footer>
            </article>
        @empty
            <div class="card">No posts yet. Be the first to share something!</div>
        @endforelse

        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </section>

    <!-- Right: Stats (Local Trending) -->
    <aside class="right">
        <div class="card">
            <h3>Local Trending</h3>
            <div class="stats">
                <div><strong>+5,462</strong> Followers</div>
                <div><strong>3,274</strong> Views</div>
                <div><strong>1,849</strong> Likes</div>
            </div>
            <div class="mini-chart">Engagement Over Time</div>
        </div>
    </aside>
</div>
@endsection
