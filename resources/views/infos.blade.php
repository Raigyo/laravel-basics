@extends('templates.mainLayout')

@section('title')
    Form
@endsection

@section('content')
  <form class="form" action="{{ url('users') }}" method="POST">
      {{ csrf_field() }}
      <label for="name">Enter your name : </label>
      <input type="text" name="name" id="name">
      <input type="submit" value="Send !">
  </form>
@endsection
