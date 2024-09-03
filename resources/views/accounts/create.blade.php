<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form method="POST" action="{{ route('accounts.store') }}">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="author">Author</option>
        </select>
        <br>
        
        <button type="submit">Create</button>
    </form>
</body>
</html>
