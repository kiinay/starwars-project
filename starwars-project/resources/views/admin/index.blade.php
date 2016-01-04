@extends('layouts.master')

@section('content')
    <h1>Administration des produits</h1>
    <div>
        <a href="{{ url('admin/product-form') }}">Créer un produit</a>
    </div>
    <div class="row">
        <div class="two columns">
            Nom du produit
        </div>
        <div class="four columns">
            Description
        </div>
        <div class="two columns">
            Status
        </div>
        <div class="two columns">
            Editer
        </div>
        <div class="two columns">
            Supprimer
        </div>
    </div>
    @foreach($products as $product)
        <hr/>
        <div class="row">
            <div class="two columns">
                {{ $product->title }}
            </div>
            <div class="four columns">
                {{ $product->abstract }}
            </div>
            <div class="two columns">
                {{ $product->status }}
            </div>
            <div class="two columns">
                Editer ce produit
            </div>
            <div class="two columns">
                Supprimer ce produit
            </div>
        </div>

    @endforeach
@endsection