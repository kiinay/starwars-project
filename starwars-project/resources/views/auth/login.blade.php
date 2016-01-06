@extends('layouts.master')


@section('content')
  <div id="auth">
    <h4>Formulaire de connexion (administration)</h4>
    {!! Form::open(array('url' => 'auth/login')) !!}
    {!! csrf_field() !!}
    {!! $errors->first('name') !!}
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', Input::old('name'), array('placeholder' => 'Votre nom...', 'class' => 'u-full-width')) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::password('password', array('placeholder' => 'Votre mot de passe...', 'class' => 'u-full-width')) !!}

    {!! Form::submit('Se connecter') !!}
    {!! Form::close()  !!}
  </div>
@endsection