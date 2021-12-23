<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reserve</title>
</head>
<body>
    @extends('layouts.layouts')
    @section('body')


    <table>
        @foreach($item as $item)
        <tr>
            <th>{{$item->reserve_id}}</th>
            <th>{{$item->user_id}}</th>
            <td>{{$item->user->name}} 様</td>
            <td>{{$item->user->address}}</td>
            <td>{{$item->user->tel}}</td>
            <td>{{$item->loan_date}}</td>
            <td>{{$item->return_date}}</td>
            <td>{{$item->book->book_name}}</td>
        @endforeach
    </table>
</body>
</html>