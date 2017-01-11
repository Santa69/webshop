@extends('templates.base')
@section('title', 'Magasin')
@section('content')

  <h2>{{ Session::get('status') }}</h2>
  @if($products instanceof Illuminate\Database\Eloquent\Collection)
    @foreach($products as $product)
      <div data-id='{{ $product->id }}' class="single-product">
        <img style="width: 100px;" src='/img/{{ $product->img }}'>
        <p>{{$product->name}}</p>
        <div>
          <p>{{ $product->description }}</p>
          <p>{{$product->price}}</p>
        </div>
        <button>Add to Panier</button>
      </div>
    @endforeach
  @else
    <div data-id='{{ $products->id }}' class="single-product">
      <img style="width: 50px;" src='/img/{{ $products->img }}'>
      <p>{{$products->name}}</p>
      <div>
        <p>{{ $products->description }}</p>
        <p>{{ $products->price }}</p>
      </div>
      <button>Add to Panier</button>
    </div>
  @endif
@endsection
