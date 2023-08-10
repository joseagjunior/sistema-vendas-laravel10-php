@extends('master')
@section('home')

    <div class="head">
        <a class="title">Users</a>
        <button class="new" onclick="window.location ='{{ route('users.create') }}'">New User</button>
    </div>

    <hr>
    
    <div class="search-container">
        <form action="{{ route('users.index') }}/" method="GET">
            <table class="tableEdit">
                <tr>
                    <td>Search User</td>
                    <td>
                        <input type="text" name="search" id="search" placeholder="Name User">
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
                    <th>E-mail</th>
                    <th>Date Create</th>
                </tr>
            </thead>
            <tbody>    
                @foreach ($users as $user)
                    <tr>
                        <td class="nameProductTable">{{ strtoupper($user->name) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td class="buttonsTable">
                            <a href="{{route('users.show', ['user' => $user->id])}}">Show</a> | 
                            <a href="{{route('users.edit', ['user' => $user->id])}}">Alter</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection