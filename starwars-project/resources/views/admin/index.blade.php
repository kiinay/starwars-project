@extends('layouts.master')

@section('content')
  <h1>Administration des produits</h1>

  @if (Session::has('message'))
      <div class="session">{!! session('message') !!}</div>
  @endif

  <div id="admin-products">
    <div class="create-product">
      <a href="{{ url('admin/product-form') }}" class="button button-primary">
        CRÉER UN PRODUIT
      </a>
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
        <div class="four columns abstract">
          {{ $product->abstract }}
        </div>
        <div class="two columns">
          {{ $product->status }}
        </div>
        <div class="two columns">
            <a href="{{ url('admin/'.$product->id.'/edit') }}">Editer</a>
        </div>
        <div class="two columns">
            <form action="{{ URL::route('admin.destroy',$product['id']) }}" method="POST" onsubmit="return confirm('Etes vous sur de vouloir supprimer ce produit ?');">
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="submit" value="Supprimer">
            </form>

        </div>
      </div>
    @endforeach
  </div>
@endsection