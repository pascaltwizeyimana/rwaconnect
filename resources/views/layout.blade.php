<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RwaConnect</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="app">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2 class="logo">RwaConnect</h2>
            <nav>
                <a href="{{ route('home') }}">🏠 Home</a>
                <a href="{{ route('inbox') }}">💬 Inbox</a>
                <a href="{{ route('analytics') }}">📊 Analytics</a>
                <a href="{{ route('post') }}">➕ Post</a>
            </nav>
        </aside>

        <!-- Main content -->
        <main class="content">
            <!-- Top Search -->
            <div class="topbar">
                <input type="text" placeholder="Search videos, music, accounts, trends...">
            </div>

            <div class="page">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
