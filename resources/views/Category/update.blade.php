<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())

    @foreach ($errors->all() as $error )
    <div calss="alert alert-danger">{{ $error }}</div>

    @endforeach

    @endif

    <form action="{{ url("categories/update/$category->id") }}" method="POST">
          @csrf
          @method('PUT')
        <input type="text" name="name" id="" value="{{ $category->name }}"> <br>
        <textarea name="desc" id="" >value="{{ $category->desc }}"</textarea> <br>

        <button type="submit" >update</button>
</body>
</html>
