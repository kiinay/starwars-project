@extends('layouts.master')


@section('content')
  @if (Session::has('message'))
    <div class="session">{!! session('message') !!}</div>
  @endif

  <div id="create-form">
    <h4>Formulaire d'inscription</h4>

    {!! Form::open(array('action' => 'CustomersController@store')) !!}<br>
    {!! csrf_field() !!}
    {!! $errors->first('name') !!}
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', Input::old('name'), array('placeholder' => 'Votre nom...', 'class' => 'u-full-width')) !!}

    {!! Form::label('email', 'Addresse e-mail') !!}
    {!! Form::email('email', Input::old('email'), array('placeholder' => 'Votre e-mail...', 'class' => 'u-full-width')) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::password('password', array('class' => 'u-full-width')) !!}

    {!! Form::submit('S\'inscrire') !!}
    {!! Form::close()  !!}
  </div>
@endsection