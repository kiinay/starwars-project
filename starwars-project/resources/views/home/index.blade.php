@extends('layouts.master')

@section('content')
  @foreach($products as $product)
    <div id="product">
      <div class="img-min">
        <img src="{{ asset('assets/img/star-wars-minions.png') }}" alt="product pictures">
      </div>

      <div class="infos">
        <h2>
          <a href="#">
            {{ $product->title }}
          </a>
        </h2>
        <small>CATEGORY</small>

        <p>
          {{ $product->abstract }}
        </p>

        <p>#tag</p>

        <a href="#">Lire la suite...</a>
      </div>
    </div>
  @endforeach
@endsection