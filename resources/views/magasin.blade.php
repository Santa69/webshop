@extends('templates.base')
@section('title', 'Magasin')
@section('content')
    <h1>C'est mon Magasin</h1>
    <div class="container" id="row1">
      @foreach ($products as $product)
  <div class="container" id="IMG">
  <p><img style="width: 20%;"src='/img/{{$product->img}}'></p>
  </div>
  <div class="container" id="nomproduit">
    <table>
    <th>Nom</th>
    <td>{{ $product->name }}</td>
    <th>Taille</th>
    <td>{{ $product->height }} x {{ $product->width }}</td>
    </table>

  </div>
  <div class="container" id="desc">
    <table>
    <th>Description</th>
    <td>{{ $product->description }}</td>
    </table>
  </div>
  <div class="container">
    <table id="prix">
          <th>Prix </th>
          <td>{{ $product->price / 100 }}</td>
            </table>
            <button type="button">Panier</button>
          </div>
          @endforeach
</div>
  </div>
@endsection
