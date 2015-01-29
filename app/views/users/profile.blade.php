@extends('layouts.default')

@section('content')

  <div>
    <h1>
      {{ Auth::user()->username; }}'s Profile
    </h1>
  </div>

@stop
