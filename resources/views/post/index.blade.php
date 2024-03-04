@extends('layout.layout')

@section('content')
@include('shared.store')
<h1>All Posts</h1>
  @foreach ($posts as $post)
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <a href="{{route('posts.show', $post->id)}}">view</a>
    <hr>
  @endforeach
@endsection