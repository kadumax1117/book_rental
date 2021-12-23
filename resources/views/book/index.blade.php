<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>
</head>
<body>
    @extends('layouts.layouts')
    @section('body')

    <h1>本のリスト</h1>

    <form action="/user/add" method="POST">
        @csrf
        <select class="form-select" aria-label="Default select example">
            @foreach ($item as $item)
            <option>{{$item->book_name}}</option>
            @endforeach
          </select>
          <input type="submit" value="借りる"> 
    </form>

</body>
</html>