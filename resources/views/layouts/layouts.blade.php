<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a href="/user">user</a>
    <a href="/book">book</a>
    <a href="/reserve">reserve</a>
    <a href="/user/add">add</a>
    
    @yield('body')
</body>
</html>