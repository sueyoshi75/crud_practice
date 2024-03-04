@extends('layout.layout')

@section('content')
<h1>Login</h1>
<form method="POST" action="{{route('login')}}">
  @csrf
  <label>emai</label>
  <input type="email" name="email">
  <label>password</label>
  <input type="password" name="password">
  <button>login</button>
</form>
@endsection