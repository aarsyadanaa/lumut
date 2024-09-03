<!DOCTYPE html>
<html>
<head>
    <title>Edit Account</title>
</head>
<body>
    <h1>Edit Account</h1>
    <form method="POST" action="{{ route('accounts.update', $account->username) }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $account->name }}" required>
        <br>
        <label for="role">Role:</label>
        <input type="text" name="role" value="{{ $account->role }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
