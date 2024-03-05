@extends('layout.layout')

@section('content')
<h1 class="text-4xl p-4 font-bold">Login</h1>
<form method="POST" action="{{route('authenticate')}}">
  @csrf
  <label>emai</label>
  <input type="email" name="email" class="w-full block border border-gray-200">
  @error('email')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <label class="block">password</label>
  <input type="password" name="password" class="w-full block border border-gray-200">
  @error('password')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <button class="block bg-blue-400 px-4 py-2 mt-2 text-white rounded-xl">login</button>
</form>
@endsection