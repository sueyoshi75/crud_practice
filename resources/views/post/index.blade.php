@extends('layout.layout')

@section('content')
  @include('shared.success_message')
  @if (auth()->user())
    @include('shared.store')
  @endif
  <h1 class="text-4xl font-bold p-4">All Posts</h1>
  @foreach ($posts as $post)
  <div class="p-4">
    <h2 class="text-2xl font-bold p-2 text-gray-500">{{$post->title}}</h2>
    <p class="text-xl px-4">{{$post->content}}</p>
    <div class="text-right text-gray-400">by {{$post->user->name}}</div>
    <div class="mt-2 flex items-center">
      <div>
        <a href="{{route('posts.show', $post->id)}}" class="inline-block text-blue-400 border border-gray-400 py-1 px-2 rounded-full">view</a>
      </div>
      <form method="GET" action="{{route('posts.edit', $post->id)}}">
        @csrf
        <button type="submit" class="ml-2 border border-gray-400 py-1 px-2 rounded-full text-blue-400">edit</button>
      </form>
      <form method="POST" action="{{route('posts.destroy', $post->id)}}">
        @csrf
        @method('delete')
        <button type="submit" class="ml-2 border border-gray-400 py-1 px-2 rounded-full text-blue-400">delete</button>
      </form>
    </div>
  </div>
  <hr>
  @endforeach
@endsection