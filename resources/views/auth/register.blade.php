@extends('layout.layout')

@section('content')
<h1>Register</h1>
<form method="POST" action="{{route('registering')}}">
  @csrf
  <label>name</label>
  <input type="text" name="name">
  <label>emai</label>
  <input type="email" name="email">
  <label>password</label>
  <input type="password" name="password">
  <label>password_confirmation</label>
  <input type="password" name="password_confirmation">
  <button>register</button>
</form>
@endsection