@extends('layout.layout')

@section('content')
@include('shared.success_message')
  <h1 class="text-4xl p-4 font-bold">Show Page</h1>
  <h2 class="text-2xl font-bold text-gray-500 p-2">{{$post->title}}</h2>
  <p class="text-xl px-4">{{$post->content}}</p>
  <div class="mt-2 flex">
    <form method="GET" action="{{route('posts.edit', $post->id)}}">
      @csrf
      <button type="submit" class="mx-2 border border-gray-400 py-1 px-2 rounded-full text-blue-400">edit</button>
    </form>
    <form method="POST" action="{{route('posts.destroy', $post->id)}}">
      @csrf
      @method('delete')
      <button type="submit" class="mx-2 border border-gray-400 py-1 px-2 rounded-full text-blue-400">delete</button>
    </form>
  </div>
  <br>
  <hr>
  <h1 class="text-2xl font-bold text-gray-400 py-2">Comments</h1>
  <form method="POST" action="{{route('posts.comments.store', $post->id)}}">
    @csrf
    <textarea name="content" class="border border-gray-200 w-full"></textarea>
    <button type="submit" class="bg-indigo-400 px-2 py-1 text-white rounded-full">save</button>
  </form>
  <br>
  <hr>
  @foreach ($post->comments as $comment)
      <p>{{$comment->content}}</p>
  @endforeach
@endsection