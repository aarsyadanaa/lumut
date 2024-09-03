<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->idpost) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $post->title }}" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" required>{{ $post->content }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
