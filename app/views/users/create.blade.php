@extends('layouts.default')

@section('content')

<h1>Create New User</h1>

{{ Form::open(['route' => 'users.store']) }}
<div id='createNewUserPage'>
  {{ Form::label('username', 'Username: ', ['id' => 'createNewUser']) }}
  {{ Form::text('username', null, ['id' => 'createNewUserInput']) }}
  {{ $errors->first('username') }}
</div>

<div id='createNewUserPage'>
  {{ Form::label('email', 'Email: ', ['id' => 'createNewUser']) }}
  {{ Form::email('email', null, ['id' => 'createNewUserInput']) }}
  {{ $errors->first('email') }}
</div>

<div id='createNewUserPage'>
  {{ Form::label('password', 'Password: ', ['id' => 'createNewUser']) }}
  {{ Form::password('password', ['id' => 'createNewUserInput']) }}
  {{ $errors->first('password') }}
</div>

<div> {{ Form::submit('Create User') }} </div>

{{ Form::close() }}

@stop
