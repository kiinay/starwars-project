@extends('layouts.master')

@section('content')
    <div align="center">
    <h1>{{ $category->title }}</h1>
    <em>{{ $category->description }}</em>
    </div>
    <hr/>
    @foreach($products as $product)
        <div id="product">
            <div class="img-min">
                <img src="{{ asset($product->image->uri) }}" alt="product pictures">
            </div>

            <div class="infos">
                <h2>
                    <a href="#">
                        {{ $product->title }}
                    </a>
                </h2>
                <p>
                    {{ $product->abstract }}
                </p>

                <p>#tag</p>

                <a href="#">Lire la suite...</a>
            </div>
        </div>
    @endforeach
@endsection