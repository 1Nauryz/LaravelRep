<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>All posts</title>
</head>
<body>
<div> <a href="{{route('posts.create')}}">Go to Create Page</a> </div>
@foreach($allPosts as $onePost)
    <a href="{{route('posts.show', $onePost->id)}}"><h3{{$onePost->title}}</h3></a>
                 <p>{{$onePost->content}}</p>

    <form action="{{route('posts.destroy', $onePost->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
</body>
</html>
