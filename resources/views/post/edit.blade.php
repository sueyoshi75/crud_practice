@extends('layout.layout')

@section('content')
<h1 class="text-4xl p-4 font-bold">Edit page</h1>
<form method="POST" action="{{route('posts.update', $post->id)}}">
  @csrf
  @method('PUT')
  <label>title</label>
  <input type="text" name="title" value="{{$post->title}}" class="w-full block border border-gray-200">
  @error('title')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <label>content</label>
  <textarea name="content" class="w-full block border border-gray-200">{{$post->content}}</textarea>
  @error('content')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <button class="block bg-blue-400 px-4 py-2 mt-2 text-white rounded-xl">update</button>
</form>
@endsection