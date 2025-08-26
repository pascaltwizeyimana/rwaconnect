<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RwaConnect</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feed.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
    <nav class="navbar">
        <div class="brand">RwaConnect</div>
        <div class="links">
            <a href="{{ route('dashboard') }}">🏠 Home</a>
            <a href="/chat">💬 Inbox</a>
            <a href="/analytics">📊 Analytics</a>
            <a href="/upload">➕ Post</a>
            <form action="{{ route('logout') }}" method="get" style="display:inline;">
                <button class="logout">Logout</button>
            </form>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
