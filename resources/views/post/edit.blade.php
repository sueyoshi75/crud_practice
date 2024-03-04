@extends('layout.layout')

@section('content')
<h1>Edit page</h1>
<form method="POST" action="{{route('posts.update', $post->id)}}">
  @csrf
  @method('PUT')
  <label>title</label>
  <input type="text" name="title" value="{{$post->title}}">
  <br>
  <label>content</label>
  <textarea name="content">{{$post->content}}</textarea>
  <button>update</button>
</form>
@endsection