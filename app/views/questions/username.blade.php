@extends('layouts.default')

@section('content')

  <div id='change'>
    {{ Form::open(['route' => 'questions.store']) }}
      <div>
        {{ Form::label('username', 'New Username: ') }}
        {{ Form::text('username') }}
      </div>

      <div> {{ Form::submit('Change Username') }} </div>
    {{ Form::close() }}
  </div>

@stop
