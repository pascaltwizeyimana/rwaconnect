<!DOCTYPE html>
<html>
<head>
    <title>Register - RwaConnect</title>
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div class="auth-container">
    <h2>Create Account</h2>
    @if($errors->any())
        <p class="error">{{ $errors->first() }}</p>
    @endif
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Full Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="/login">Login</a></p>
</div>
</body>
</html>
