@extends('layout')


@section('titel')
all categories
@endsection

@section('css')


@endsection

@section('content')




@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
<br>
@endif

@foreach ($categories as $category )

{{$loop->iteration}} - <a href={{route("showCategory",$category->id) }}>{{ $category->name }}</a>  <br>

<img src="{{ asset("storage/$category->image") }}" width="200px" alt="" srcset="">
<br>
descrpition ::{{ $category->desc }}

 <hr>
@endforeach
<a href="{{ url("categories/create") }}">create</a>

{{ $categories->links() }}


@endsection

