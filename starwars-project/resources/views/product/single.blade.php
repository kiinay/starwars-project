@extends('layouts.master')

@section('content')
  @if (Session::has('message'))
      <div class="session">{!! session('message') !!}</div>
  @endif
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
          {!! Form::open(array('url'=>'add-product','method'=>'POST', 'id'=>'myform')) !!}
          {!! Form::select('quantity', [1,2,3,4,5,6,7,8,9]) !!}
          <a href="javascript:void(0)" data-product="{{ $product->id }}" class="button button-primary">Ajouter cette quantité à votre panier</a>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection