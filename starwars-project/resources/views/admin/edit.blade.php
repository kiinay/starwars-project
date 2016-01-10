@extends('layouts.master')

@section('content')
  <h1>Edition d'un produit</h1>
  <div id="create-form">
    <h4>Formulaire d'édition d'un produit</h4>
    @if (Session::has('message'))
      <div>{!! session('message') !!}</div>
    @endif
    <div>
      {!! Form::model($product,['method' => 'PATCH','route'=>['admin.update',$product->id], 'files' => true]) !!}
      {!! csrf_field() !!}
      {!! $errors->first('title') !!}
      {!! $errors->first('abstract') !!}
      {!! $errors->first('content') !!}
      {!! $errors->first('image') !!}

      {!! Form::label('title', 'Titre') !!}
      {!! Form::text('title', $product['title'], array('placeholder' => 'Titre du produit...', 'class' => 'u-full-width')) !!}

      {!! Form::label('abstract', 'Extrait de description') !!}
      {!! Form::text('abstract', $product['abstract'], array('placeholder' => 'Extrait...', 'class' => 'u-full-width')) !!}

      {!! Form::label('content', 'Description') !!}
      {!! Form::textarea('content', $product['content'], array('placeholder' => 'Description du produit...', 'class' => 'u-full-width')) !!}

        {!! Form::label('prix', 'Prix') !!}
        {!! Form::input('number','prix', $product['prix'], array('placeholder' => 'Prix', 'class' => 'u-full-width')) !!}

        {!! Form::label('image', 'Image du produit') !!}
        {!! Form::file('image') !!}
      <br/>

      <label for="status">Status : </label>
      <?php
      $select = "<select name='status' required>\
            ";
      if ($product['status'] == 'disponible') {
        $select .= "<option value='disponible' selected='selected'>disponible</option>\
            ";
      } else {
        $select .= "<option value='disponible'>disponible</option>\
            ";
      }
      if ($product['status'] == 'commande') {
        $select .= "<option value='commande' selected='selected'>commande</option>\
            ";
      } else {
        $select .= "<option value='commande'>commande</option>\
            ";
      }
      if ($product['status'] == 'rupture') {
        $select .= "<option value='rupture' selected='selected'>rupture</option>\
            ";
      } else {
        $select .= "<option value='rupture'>rupture</option>\
            ";
      }

      echo $select . "</select>";

      ?>


      <br/>
      <label for="category_id">Catégorie : </label>
      <?php
      $select = "<select name='category_id' required>\
            ";
      if ($product['category_id'] == 1) {
        $select .= "<option value='1' selected='selected'>Lasers</option>\
            ";
      } else {
        $select .= "<option value='1'>Lasers</option>\
            ";
      }
      if ($product['category_id'] == 2) {
        $select .= "<option value='2' selected='selected'>Casques</option>\
            ";
      } else {
        $select .= "<option value='2'>Casques</option>\
            ";
      }
      echo $select . "</select>";
      ?>

      <br>
      <br/>
      <label for="tags">Tags : </label>
      <?php
      $s = 0;
      for ($i = 0; $i < 5; $i++) {
        if (isset($tags[$i]) && $tags[$i]['tag_id'] == 1) {
          echo "<input type='checkbox' value='1' name='Etoile' checked='checked' />Etoile";
          $s = 1;
        }
        if ($i == 4 && $s != 1) echo "<input type='checkbox' value='1' name='Etoile' />Etoile";
        if ($i == 4) $s = 0;
      }
      for ($i = 0; $i < 5; $i++) {
        if (isset($tags[$i]) && $tags[$i]['tag_id'] == 2) {
          echo "<input type='checkbox' value='2' name='Espace' checked='checked' />Espace";
          $s = 1;
        }
        if ($i == 4 && $s != 1) echo "<input type='checkbox' value='2' name='Espace' />Espace";
        if ($i == 4) $s = 0;
      }
      for ($i = 0; $i < 5; $i++) {
        if (isset($tags[$i]) && $tags[$i]['tag_id'] == 3) {
          echo "<input type='checkbox' value='3' name='Galaxie' checked='checked' />Galaxie";
          $s = 1;
        }
        if ($i == 4 && $s != 1) echo "<input type='checkbox' value='3' name='Galaxie' />Galaxie";
        if ($i == 4) $s = 0;
      }
      for ($i = 0; $i < 5; $i++) {
        if (isset($tags[$i]) && $tags[$i]['tag_id'] == 4) {
          echo "<input type='checkbox' value='4' name='Empire' checked='checked' />Empire";
          $s = 1;
        }
        if ($i == 4 && $s != 1) echo "<input type='checkbox' value='4' name='Empire' />Empire";
        if ($i == 4) $s = 0;
      }
      for ($i = 0; $i < 5; $i++) {
        if (isset($tags[$i]) && $tags[$i]['tag_id'] == 5) {
          echo "<input type='checkbox' value='5' name='Alliance' checked='checked' />Alliance";
          $s = 1;
        }
        if ($i == 4 && $s != 1) echo "<input type='checkbox' value='5' name='Alliance' />Alliance";
      }

      ?>
      <br>
      {!! Form::submit('Enregistrer') !!}
      {!! Form::close()  !!}
    </div>
  </div>
@endsection