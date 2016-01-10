@extends('layouts.master')

@section('content')
  <div id="product" class="row">
    <div class="six columns">
      <div class="head show">
        <h2>{{ $product->title }}</h2>
        <a href="{{ url('category', $product->category->id) }}">
          <p>{{ $product->category->title }}</p>
        </a>
      </div>

      <p>
        {{ $product->content }}
      </p>

        <p><em>{{ $product->tags->lists('name') }}</em></p>
    </div>

    <div class="img-max six columns">
      <img src="{{ asset($product->image->uri) }}" alt="product pictures">

      <div class="command">
        <h4 class="price">{{ $product->prix }}€</h4>

        <a href="#" class="button button-primary">
          Ajouter au panier
        </a>
      </div>
    </div>
  </div>
@endsection