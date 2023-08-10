@extends('master')
@section('home')
    
    <div class="head">
        <a class="title">Create User</a>
        <button class="new" onclick="window.location ='{{ route('users.index') }}'">Back</button>
    </div>

    <hr>

    <div class="body">
        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif
        <form action="{{ route('users.store')}}" method="post">
            @csrf
            <table class="tableEdit">
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" id="nameProduct" name="name" placeholder="Your Name">
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="email" name="email" placeholder="Your E-mail">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="Your password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="SaveEditProduct" type="submit">Save</button>
                    </td>
                </tr>
            </table>
        </form>
        <button class="SaveEditProduct" onclick="window.location ='{{ route('users.index') }}'">Cancel</button>
    </div>

@endsection