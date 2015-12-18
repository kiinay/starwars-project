@extends('layouts.master')


@section('content')
    <br><h4>Formulaire de connexion (administration)</h4>
    {!! Form::open(array('url' => 'auth/login')) !!}<br>
    {!! csrf_field() !!}
    {!! $errors->first('name') !!}
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}

    {!! Form::label('name', 'Nom') !!}
    {!! Form::text('name', Input::old('name'), array('placeholder' => 'Votre nom...', 'class' => 'u-full-width')) !!}

    {!! Form::label('password', 'Mot de passe') !!}
    {!! Form::password('password', array('class' => 'u-full-width')) !!}

    {!! Form::submit('Se connecter') !!}
    {!! Form::close()  !!}
@endsection