@extends('layouts.master')

@section('content')
  <h1>Contact</h1>

  <div id="contact" class="row">
    <div class="six columns">
      {!! Form::open(array('action' => 'Admin\AdminController@store', 'files' => true)) !!}<br>
      {!! csrf_field() !!}

      {!! Form::label('subject', 'Sujet') !!}
      {!! Form::text('subject', Input::old('subject'), array('placeholder' => 'Sujet de votre demande...', 'class' => 'u-full-width')) !!}

      {!! Form::label('message', 'Message') !!}
      {!! Form::textarea('message', Input::old('message'), array('placeholder' => 'Votre demande...', 'class' => 'u-full-width')) !!}

      {!! Form::submit('Envoyer')  !!}
      {!! Form::close()  !!}
    </div>

    <div class="six columns">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202845.11503115715!2d-122.18118180600266!3d37.402720919672134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb68ad0cfc739%3A0x7eb356b66bd4b50e!2sSilicon+Valley%2C+Californie!5e0!3m2!1sfr!2sus!4v1452274550127" width="400" height="300" frameborder="0" style="border:0;margin-top:38px" allowfullscreen></iframe>
    </div>
  </div>
@endsection