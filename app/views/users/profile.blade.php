@extends('layouts.default')

@section('content')

<div>
  <h1>
    {{ Auth::user()->username; }}'s Profile
  </h1>
</div>

<div id='profile'>
  <ul>
    <li><a href='/username'>Change Username</a></li>
    <li><a href='/email'>Change Email</a></li>
    <li><a href='/password'>Change Password</a></li>
  </ul>
</div>

@stop
