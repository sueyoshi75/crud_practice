@extends('layout.layout')

@section('content')
<h1>Show Page</h1>
<h2>{{$post->title}}</h2>
<p>{{$post->content}}</p>
<form method="GET" action="{{route('posts.edit', $post->id)}}">
  @csrf
  <button type="submit">edit</button>
</form>
<form method="POST" action="{{route('posts.destroy', $post->id)}}">
  @csrf
  @method('delete')
  <button type="submit">delete</button>
</form>
@endsection