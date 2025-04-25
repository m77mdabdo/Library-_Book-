@extends('layout')

@section('titel')
show categories

@endsection


@section('css')

@endsection


@section('content')


    @if(session()->has("success"))
    <alert class="alert success">{{ session()->get("success") }}</alert> <br>

    @endif


  CategoryName :  {{ $category->name }} <br>
  categoryDescription :   {{ $category->desc }}
  <br>
  Book name :<br>
  @foreach ($category->books as $book)
  {{ $loop->iteration  }} - <a href="{{ route("showBook",$book->id) }}"> {{$book->title }} </a> <br>


    @endforeach




  <hr>
   Image : <img src="{{ asset("storage/$category->image") }}" width="200px" alt="" srcset="">
   <br>
  <a class="btn btn-info" href="{{ route("editeCategory",$category->id) }}">edite</a>

  <form action="{{ url("categories/delete/$category->id") }}" method="POST">
@csrf
@method("DELETE")
<button type="submit" class="btn btn-danger">delete</button>

</form>
@endsection


@section('js')

@endsection
