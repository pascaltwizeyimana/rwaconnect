<!DOCTYPE html>
<html>
<head>
    <title>Login - RwaConnect</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <h2>Login</h2>
    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Don’t have an account? <a href="/register">Register</a></p>
</div>
</body>
</html>
