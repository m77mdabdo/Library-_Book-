@extends('layout')

@section('titel')
    show Books
@endsection

@section('css')

@endsection

@section('content')

@if(session()->has("success"))
<alert class="alert success">{{ session()->get("success") }}</alert> <br>

@endif

Title : {{ $book->title }} <br>

desc : {{ $book->desc }} <bre>
<br>
Image : <img src="{{ asset("storage/$book->image") }}"  width="200px" alt="" srcset="">
<br>
Category Name :<a href="{{ route("showCategory", $book->category->id) }}"> {{ $book->category->name }} </a>

<br>
<a class="btn btn-info" href="{{ route("editeBook",$book->id) }}">edite</a>

<br>

{{-- delete books  --}}
<form action="{{ route("deleteBook",$book->id) }}" method="POST">
@csrf
@method("DELETE")
<button type="submit" class="btn btn-danger">delete</button>

</form>


@endsection


@section('js')

@endsection
