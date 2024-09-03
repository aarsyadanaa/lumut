<!DOCTYPE html>
<html>
<head>
    <title>Accounts</title>
</head>
<body>
    <h1>Accounts</h1>
    <a href="{{ route('accounts.create') }}">Create New Account</a>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
                <tr>
                    <td>{{ $account->username }}</td>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->role }}</td>
                    <td>
                        <a href="{{ route('accounts.edit', $account->username) }}">Edit</a>
                        <form action="{{ route('accounts.destroy', $account->username) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
