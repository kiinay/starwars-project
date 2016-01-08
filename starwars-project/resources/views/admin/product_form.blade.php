@extends('layouts.master')

@section('content')
  <h1>Création d'un produit</h1>

  <div id="create-form">
    @if (Session::has('message'))
      <div>{!! session('message') !!}</div>
    @endif

    <div>
      {!! Form::open(array('action' => 'Admin\AdminController@store', 'files' => true)) !!}<br>
      {!! csrf_field() !!}
      @foreach ($errors->all() as $errors)
        <div class="error">
          <p>{{ $errors }}</p>
        </div>
      @endforeach

      {!! Form::label('title', 'Titre') !!}
      {!! Form::text('title', Input::old('title'), array('placeholder' => 'Titre du produit...', 'class' => 'u-full-width')) !!}

      {!! Form::label('abstract', 'Extrait de description') !!}
      {!! Form::text('abstract', null, array('placeholder' => 'Extrait...', 'class' => 'u-full-width')) !!}

      {!! Form::label('content', 'Description') !!}
      {!! Form::text('content', null, array('placeholder' => 'Description du produit...', 'class' => 'u-full-width')) !!}

      {!! Form::label('image', 'Image du produit') !!}
      {!! Form::file('image') !!}

      <br>
    <br/>
    <label for="status">Status : </label>
    <select name="status" multiple required>
        <option value="disponible">Disponible</option>
        <option value="commande">Commande</option>
        <option value="rupture">Rupture</option>
    </select>

    <br/>
    <label for="category_id">Catégorie : </label>
    <select name="category_id" multiple required>
      <option value="1">Lasers</option>
      <option value="2">Casques</option>
    </select>
    <br>
        <label for="tags">Tags : </label>
        <input type="checkbox" name="Etoile" value="1"/>Etoile
        <input type="checkbox" name="Espace" value="2" />Espace
        <input type="checkbox" name="Galaxie" value="3" />Galaxie
        <input type="checkbox" name="Empire" value="4" />Empire
        <input type="checkbox" name="Alliance" value="5" />Alliance
        <br>

      {!! Form::submit('Enregistrer') !!}
      {!! Form::close()  !!}
    </div>
  </div>
@endsection