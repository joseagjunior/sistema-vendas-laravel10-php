@extends('master')
@section('home')

    <div class="head">
        <a class="title">Products</a>
        <button class="new" onclick="window.location ='{{ route('products.create') }}'">New Product</button>
    </div>

    <hr>

    <div class="search-container">
        <form action="{{ route('products.index') }}/" method="GET">
            <table class="tableEdit">
                <tr>
                    <td>Search Product</td>
                    <td>
                        <input type="text" name="search" id="search" placeholder="Name Product">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <hr>

    <div class="body">
        <table class="tableShow">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>    
                @foreach ($products as $product)
                    <tr>
                        <td class="nameProductTable">{{ strtoupper($product->nameProduct) }}</td>
                        <td>R$ {{ $product->price }}</td>
                        <td>{{ $product->stock }} {{$product->typeStock}}</td>
                        <td class="buttonsTable">
                            <a href="{{route('products.show', ['product' => $product->id])}}">Show</a> | 
                            <a href="{{route('products.edit', ['product' => $product->id])}}">Alter</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection