<!DOCTYPE html>
<html>
<head>
    <title>Author Dashboard</title>
</head>
<body>
    <h1>Welcome, Author!</h1>
    <div>
        <p><a href="{{ route('posts.index') }}">Manage Your Posts</a></p>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
