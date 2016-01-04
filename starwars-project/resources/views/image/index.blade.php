@extends('layouts.master')

@section('content')
  {!! Form::open(
      array(
          'action' => 'image.add',
          'class' => 'form',
          'novalidate' => 'novalidate',
          'files' => true)) !!}

  <div class="form-group">
    {!! Form::label('Product Image') !!}
    {!! Form::file('image', null) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Create Product!') !!}
  </div>

  {!! Form::close() !!}
@endsection