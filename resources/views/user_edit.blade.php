@extends('master')
@section('home')
    
    <div class="head">
        <a class="title">Edit User</a>
        <button class="new" onclick="window.location ='{{ route('users.index') }}'">Back</button>
    </div>

    <hr>

    <div class="body">
        @if (session()->has('message'))
            {{ session()->get('message') }}
        @endif
        <form action="{{ route('users.update', ['user' => $users->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <table class="tableEdit">
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" id="nameProduct" name="name" value="{{ strtoupper($users->name) }}">
                    </td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td>
                        <input type="email" name="email" value="{{ $users->email }}">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password">
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