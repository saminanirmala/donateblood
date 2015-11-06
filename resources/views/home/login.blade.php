@extends('layouts.logindefault')
@section('content')

<body>

<div id="login">

  <div class="body bg-gray">


    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> Error! Invalid Username / Password<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif




    <h2><span class="fontawesome-lock"></span>Sign In</h2>

    {!! Form::open(['url'=>'/loginaction']) !!}


        <fieldset>

            <p><label for="email">E-mail address</label></p>
            <p>  {!! Form::text('username','',['class'=>'form-control','placeholder'=>'Username']) !!}</p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

            <p><label for="password">Password</label></p>
            <p>{!! Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}</p> <!-- JS because of IE support; better: placeholder="password" -->

            <p>{!! Form::submit("Sign Me In",['class'=>'btn bg-olive btn-block'])!!}</p>

        </fieldset>

    {!! Form::close() !!}
</div> <!-- end login -->

</body>
</html>