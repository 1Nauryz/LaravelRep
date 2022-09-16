<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>All posts</title>
</head>
<body>
<a href="{{route('posts.index')}}">Go to Index Page</a>
<p>Post with ID = {{$postId}}</p>

</body>
</html>
