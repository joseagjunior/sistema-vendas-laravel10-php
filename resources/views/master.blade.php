<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>teste Sistema</title>
</head>
<body>
    <div class="container">
        <button class="btnMenuBar" onclick="window.location = '{{ route('users.index') }}'">Users</button>
        <button class="btnMenuBar" onclick="window.location = '{{ route('products.index') }}'">Products</button>
        <button class="btnMenuBar" onclick="window.location = '{{ route('orders.index') }}'">Orders</button>
        <button class="btnMenuBarLogin" onclick="window.location = '{{ route('products.index') }}'">Login</button>
        <button class="btnMenuBarLogin" onclick="window.location = '{{ route('products.index') }}'">Cadaster</button>
    </div>
    <hr>
    <div class="container">
        @yield('home')
    </div>
</body>
</html>