<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>All posts</title>
</head>
<body>
<a href="{{route('posts.index')}}">Go to Index Page</a>

<h3>{{$post->title}}</h3>
<p>{{$post->content}}</p>
<br><br>
<div>Comments:</div>
@foreach($post->comments as $com)
    <div>
<p>{{$com->content}}</p>
    </div>
@endforeach
<form action="{{route('comments.store')}}" method="post">
    @csrf
    Write your comment:<br> <textarea name="content"></textarea> <br>
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <button>Save comment</button>
</form>
<a href="{{route('posts.edit', $post->id)}}">Edit</a>
</body>
</html>
