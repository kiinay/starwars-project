@extends('layouts.master')

@section('content')
    <h1>Panier</h1>
    <?php if(empty($cart)): ?>
    <div id="product" class="row">
            <h4>Votre panier est vide !</h4>
        </div>
    <?php else : ?>
    <?php $total = 0; ?>
    @foreach($cart as $product)
        <div id="product" class="row">
            <div class="five columns">
                <img src="{{ asset($product['product']->image->uri) }}" alt="product pictures" width="300" height="300">
            </div>
            <div class="seven columns" style="text-align:right;padding-right:50px">
                    <h2>
                        <a href="{{ url('product', $product['product']->id) }}">
                            {{ $product['product']->title }}
                        </a>
                    </h2>
                <?php
                $totalItem = $product['quantity']*$product['product']->prix;
                $total += $totalItem;
                ?>
                <h4>Prix : {{ $product['product']->prix }} €</h4>
                <h4>Quantité : <?= $product['quantity'] ?></h4>
                <br/><h4>Total produit : <?= $totalItem ?> €</h4>
            </div>
        </div>
    @endforeach
    <div id="product" class="row">
        <h4 class="price">Total TTC : <?= $total ?> €</h4>
        {!!   Form::open(array('url' => 'order')) !!}
        <h4>Entrer vos identifiants pour commander</h4>

        <p>
            {!! Form::label('email', 'Email Address') !!}
            {!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) !!}
        </p>

        <p>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password') !!}
        </p>

        {!! Form::text('total', $total, array('hidden' => true)) !!}

        <p>{!! Form::submit('Submit!') !!}</p>
        {!! Form::close() !!}
    </div>
    <?php endif ?>
@endsection