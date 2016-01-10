@extends('layouts.master')

@section('content')
  <div align="center">
    <h1>{{ $category->title }}</h1>
    <em>{{ $category->description }}</em>
  </div>
  <hr/>

  @foreach($products as $product)
    <div id="product" class="row">
      <div class="img-min four columns">
        <a href="{{ url('product', $product->id) }}">
          <img src="{{ asset($product->image->uri) }}" alt="product pictures">
        </a>
      </div>

      <div class="infos eight columns">
        <h2>
          <a href="{{ url('product', $product->id) }}">
            {{ $product->title }}
          </a>
        </h2>

        <p>
          {{ $product->abstract }}
        </p>

          <p><em>{{ $product->tags->lists('name') }}</em></p>

        <a href="{{ url('product', $product->id) }}">Lire la suite...</a>

        <div class="command">
          <h4 class="price">{{ $product->prix }}€</h4>
        </div>
      </div>
    </div>
  @endforeach
@endsection