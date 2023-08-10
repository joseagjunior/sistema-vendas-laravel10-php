@extends('master')
@section('home')
    
    <div class="head">
        <a class="title">Show Product</a>
        <button class="new" onclick="window.location ='{{ route('products.index') }}'">Back</button>
        <button class="new" onclick="window.location ='{{route('products.edit', ['product' => $product->id])}}'">Alter</button>
    </div>

    <hr>

    <div class="body">
        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <table class="tableEdit">
                <tr>
                    <td>Name: {{strtoupper($product->nameProduct)}}</td>
                </tr>
                <tr>
                    <td>Price: R$ {{ $product->price }}</td>
                </tr>
                <tr>
                    <td>Quantity: {{ $product->stock }} {{$product->typeStock}}</td>
                </tr>
            </table>
            <button class="SaveEditProduct" type="submit">Delete</button>
        </form>
    </div>

@endsection