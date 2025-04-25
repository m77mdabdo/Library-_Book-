@extends('layout')

@section('titel')
    allBooks
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


@foreach ($books as $book )
{{ $loop->iteration }} - <a href={{ route("showBook",$book->id) }}> {{ $book->title }}</a> <br>

descrption : {{ $book->desc }} <br>
<hr>


{{-- <a href="{{ route("showCategory") }}">createBook </a> --}}


@endforeach
<a href="{{ route("createBook") }}">createBook </a>
{{ $books->links() }}
@endsection






