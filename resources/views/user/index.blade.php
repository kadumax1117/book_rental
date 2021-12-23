<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @extends('layouts.layouts')


<h1>利用者一覧</h1>
    <table>
        <th>名前</th><th>住所</th><th>電話番号</th>
        @foreach ($item as $item) 
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->tel}}</td>
        </tr>
            
        @endforeach
    </table>
</body>
</html>