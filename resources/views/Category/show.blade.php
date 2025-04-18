<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  CategoryName :  {{ $category->name }} <br>
  categoryDescription :   {{ $category->desc }} <hr>
  <a href="{{ url("categories/edite/$category->id") }}">edite</a>

  <form action="{{ url("categories/delete/$category->id") }}" method="POST">
@csrf
@method("DELETE")
<button type="submit">delete</button>

</form>

</body>
</html>
