@extends('layouts.master')

@section('content')
  <h1>Panier</h1>

  @if (Session::has('message'))
    <div class="session">{!! session('message') !!}</div>
  @endif
  <?php if(empty($cart)): ?>
  <div id="cart" class="row">
    <h4>Votre panier est vide !</h4>
  </div>
  <?php else : ?>
  <?php $total = 0; ?>
  <a href="flush-cart" class="button button-primary"
     onClick="return confirm('Etes vous sur de vouloir vider le panier ?');">Vider le panier</a>
  @foreach($cart as $product)
    <div id="cart" class="row">
      @if (Session::has('message'))
        <div>{!! session('message') !!}</div>
      @endif

      <div class="five columns img-min">
        <a href="{{ url('product', $product['product']->id) }}">
          <img src="{{ asset($product['product']->image->uri) }}" alt="product pictures">
        </a>
      </div>

      <div class="seven columns" style="text-align:right;padding-right:50px">
        <h2>
          <a href="{{ url('product', $product['product']->id) }}">
            {{ $product['product']->title }}
          </a>
        </h2>

        <?php
        $totalItem = $product['quantity'] * $product['product']->prix;
        $total += $totalItem;
        ?>
        <p>Prix : {{ $product['product']->prix }} €</p>

        <p>Quantité : <?= $product['quantity'] ?></p>

        <br/>

        <h4>Total produit : <?= $totalItem ?> €</h4>
      </div>
    </div>
  @endforeach
  <div id="cart" class="row">
    <h4 class="price">Total TTC : <?= $total ?> €</h4>
    {!!   Form::open(array('url' => 'order')) !!}
    <h4 class="identify">Entrer vos identifiants pour commander</h4>

    <p>
      {!! Form::label('email', 'Email Address') !!}
      {!! Form::email('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) !!}
    </p>

    <p>
      {!! Form::label('password', 'Password') !!}
      {!! Form::password('password', array('placeholder' => 'Password')) !!}
    </p>

    {!! Form::text('total', $total, array('hidden' => true)) !!}

    <p>{!! Form::submit('Commander !') !!}</p>
    {!! Form::close() !!}
  </div>
  <?php endif ?>
@endsection