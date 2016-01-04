@extends('layouts.master')

@section('content')
  @if (Session::has('message'))
    <div>{!! session('message') !!}</div>
  @endif
  <h4>Formulaire de création d'un produit</h4>

  <div>
    {!! Form::open(array('action' => 'Admin\AdminController@store', 'files' => true)) !!}<br>
    {!! csrf_field() !!}
    {!! $errors->first('title') !!}
    {!! $errors->first('abstract') !!}
    {!! $errors->first('content') !!}
    {!! $errors->first('image') !!}

    {!! Form::label('title', 'Titre') !!}
    {!! Form::text('title', Input::old('title'), array('placeholder' => 'Titre du produit...', 'class' => 'u-full-width')) !!}

    {!! Form::label('abstract', 'Extrait de description') !!}
    {!! Form::text('abstract', null, array('placeholder' => 'Extrait...', 'class' => 'u-full-width')) !!}

    {!! Form::label('content', 'Description') !!}
    {!! Form::text('content', null, array('placeholder' => 'Description du produit...', 'class' => 'u-full-width')) !!}

    {!! Form::label('image', 'Image du produit') !!}
    {!! Form::file('image') !!}

    {{--{!! Form::label('status', 'Status') !!}
    {!! Form::select('status', $list_status) !!}--}}

    <br>

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close()  !!}
  </div>
@endsection