<!doctype html>
<html>

  <head>
    <title>MetalForums</title>
    <link rel="stylesheet" type="text/css" href="css/header.css"/>

  </head>

  <body>

    <div id='header'> METAL FORUMS! </div>
    <div id='header'>

      @if (Auth::check())

        <div id='loggedIn'>
          Welcome {{ Auth::user()->username; }}!
        </div>

        <div id='loggedIn'>
          <a href='/profile'>View Profile</a>
        </div>

        <div id='loggedIn'>
          <a href='logout' >Logout</a>
        </div>


      @else


        {{ Form::open(['route' => 'sessions.store']) }}

        <div id='login'>
          {{ Form::text('username', null, ['id' => 'input']) }}
          {{ Form::label('username', 'Username:', ['id' => 'label']) }}
          {{ $errors->first('username') }}
        </div>

        <div id='login'>
          {{ Form::password('password', ['id' => 'input']) }}
          {{ Form::label('password', 'Password:', ['id' => 'label']) }}
          {{ $errors->first('password') }}
        </div>

        <div id='login'>{{ Form::submit('Login', ['style'=>'float: right']) }}</div>

        <div id='login'>
          <h1 id='newUser'> New User? Click <a href='/create'>here</a></h1>
        </div>

        {{ Form::close() }}

      @endif

    </div>

    <div id='nav'>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/forum">Forums</a></li>
      </ul>
    </div>



    <div id='content'>
      @yield('content')
    </div>
  </body>

</html>
