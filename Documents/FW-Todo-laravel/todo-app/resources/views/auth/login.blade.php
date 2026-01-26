<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Todo App</title>
    @vite(['resources/css/app.css'])
    <style>body{font-family:system-ui,Segoe UI,Roboto,Helvetica,Arial,sans-serif;padding:2rem;}</style>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input id="email" name="email" type="email" required />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" required />
        </div>
        <div>
            <button type="submit">Log in</button>
        </div>
    </form>
    <p><a href="{{ route('register') }}">Register</a></p>
</body>
</html>
