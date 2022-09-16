<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Create a post</title>
</head>
<body>
<a href="{{route('posts.index')}}">Go to Index Page</a>
<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    Title: <input type="text" name="title" value="{{$post->title}}"> <br>
    Content: <textarea name="content">{{$post->content}}</textarea>
    <button>Update post</button>
</form>
</body>
</html>
