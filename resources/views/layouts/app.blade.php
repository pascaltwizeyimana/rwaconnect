<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">


</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">RwaConnect</div>
           

<nav class="navbar">
    <a href="{{ route('home') }}">🏠 Home</a>
    <a href="{{ route('inbox') }}">📥 Inbox</a>
    <a href="{{ route('analytics') }}">📊 Analytics</a>
    <a href="{{ route('post') }}">➕ Post</a>
</nav>

<!-- Search Bar -->
<div class="search-bar">
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Search videos, music, movies, accounts, trends, news..." required>
        <button type="submit">🔍</button>
    </form>
</div>



        </aside>

        <!-- Main -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>
