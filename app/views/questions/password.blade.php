@extends('layouts.default')

@section('content')

<div id='change'>
  {{ Form::open(['route' => 'questions.store']) }}
  <div>
    {{ Form::label('password', 'New Password: ') }}
    {{ Form::password('password') }}
    {{ $errors->first('password') }}
  </div>

  <div> {{ Form::submit('Change Password') }} </div>
  {{ Form::close() }}
</div>

@stop
