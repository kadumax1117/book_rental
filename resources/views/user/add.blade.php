<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.layouts')
    @section('body')
    <form action="/user" method="POST">
    @csrf
    <label for="name">お名前</label>
    <input type="text" name="name" required>
    <br>
    <label for="name">住所</label>
    <input type="text" name="address" required>
    <br>
    <label for="name">電話番号</label>
    <input type="tel" name="tel" required>
    <br>
    <input type="submit" value="登録">
</form>
</body>
</html>