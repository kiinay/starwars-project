@extends('layouts.master')

@section('content')
    <h1>Historique</h1>
    <?php if($history->isEmpty()): ?>
    <div id="product" class="row">
    <p>Historique des commandes vide.</p>
        </div>
    <?php endif ?>
    @foreach($history as $k => $hist)
    <div id="product" class="row">
        <h4>Commande {{ $k+1 }}</h4>
        @foreach($customers as $customer)
            <?php if($customer->id === $hist->customer_id): ?>
            <strong>Nom</strong> : {{ $customer->username }}<br/>
            <?php endif ?>
        @endforeach
        <strong>Total TTC</strong> : {{ $hist->total }} euros <br/>
        <strong>Date</strong> : {{ $hist->created_at }}
    </div>
    @endforeach
@endsection