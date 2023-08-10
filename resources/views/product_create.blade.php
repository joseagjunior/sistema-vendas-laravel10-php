@extends('master')
@section('home')
    
    <div class="head">
        <a class="title">Create Product</a>
        <button class="new" onclick="window.location ='{{ route('products.index') }}'">Back</button>
    </div>

    <hr>

    <div class="body">
        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif
        <form action="{{ route('products.store')}}" method="post">
            @csrf
            <table class="tableEdit">
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" id="nameProduct" name="nameProduct" placeholder="Name Product">
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="text" name="price" placeholder="Price Product">R$
                    </td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td>
                        <input type="text" name="stock" placeholder="Quantity Product">
                    </td>
                </tr>
                <tr>
                    <td>Type Stock:</td>
                    <td>
                        <input type="radio" name="typeStock" value="unit"> unit
                        <input type="radio" name="typeStock" value="kilo"> kilo
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="SaveEditProduct" type="submit">Save</button>
                    </td>
                </tr>
            </table>
        </form>
        <button class="SaveEditProduct" onclick="window.location ='{{ route('products.index') }}'">Cancel</button>
    </div>

@endsection