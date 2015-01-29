@extends('layouts.default')

@section('content')

<div id='change'>
  {{ Form::open(['route' => 'questions.store']) }}
  <div>
    {{ Form::label('email', 'New Email: ') }}
    {{ Form::email('email') }}
  </div>

  <div> {{ Form::submit('Change Email') }} </div>
  {{ Form::close() }}
</div>

@stop
