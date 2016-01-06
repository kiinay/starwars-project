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
    </div>

    <div class="img-max six columns">
      <img src="{{ asset($product->image->uri) }}" alt="product pictures">
    </div>
  </div>
@endsection