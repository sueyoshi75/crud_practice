@extends('layout.layout')

@section('content')
<h1 class="text-4xl p-4 font-bold">Register</h1>
<form method="POST" action="{{route('registering')}}">
  @csrf
  <label>name</label>
  <input type="text" name="name" class="w-full block border border-gray-200 mb-2">
  @error('name')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <label class="block">emai</label>
  <input type="email" name="email" class="w-full block border border-gray-200 mb-2">
  @error('email')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <label class="block">password</label>
  <input type="password" name="password" class="w-full block border border-gray-200 mb-2">
  @error('password')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <label class="block">password_confirmation</label>
  <input type="password" name="password_confirmation" class="w-full block border border-gray-200 mb-2">
  @error('password_confirmation')
    <span class="text-red-400">{{$message}}</span>
  @enderror
  <button class="inline-block bg-blue-400 px-4 py-2 mt-2 text-white rounded-xl">register</button>
</form>
@endsection