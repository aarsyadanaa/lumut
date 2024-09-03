<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="menu">
            <ul>
                <li><a href="{{ route('accounts.index') }}">Manage Accounts</a></li>
                <li><a href="{{ route('posts.index') }}">Manage Posts</a></li>
            </ul>
        </div>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
