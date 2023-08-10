@extends('master')
@section('home')
    
    <div class="head">
        <a class="title">Show User</a>
        <button class="new" onclick="window.location ='{{ route('users.index') }}'">Back</button>
        <button class="new" onclick="window.location ='{{route('users.edit', ['user' => $user->id])}}'">Alter</button>
    </div>

    <hr>

    <div class="body">
        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <table class="tableEdit">
                <tr>
                    <td>Name: {{strtoupper($user->name)}}</td>
                </tr>
                <tr>
                    <td>E-mail: {{ $user->email }}</td>
                </tr>
            </table>
            <button class="SaveEditProduct" type="submit">Delete</button>
        </form>
    </div>

@endsection