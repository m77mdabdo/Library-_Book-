@extends('layout')

@section('titel')
    updateBook
@endsection

@section('css')

@endsection

@section('content')
@if($errors->any())

@foreach ($errors->all() as $error )
<div class="alert alert-danger">{{ $error }}</div>

@endforeach

@endif

<div class="container w-50">

    <form action="{{ route("updateBook",$book->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <input type="text" name="title" id="" class="form-control " rows="10" value="{{ $book->title}}"> <br>
        <textarea name="desc" id="" cols="30" class="form-control " rows="10" value=""> {{ $book->desc}}</textarea> <br>

        <input type="number" name="price" id="" value="{{ $book->price }}"> <br>

        <select name="category_id" id="" >
            <option value="{{ $book->category->id }}">{{ $book->category->name }}</option>
            @foreach ($categories as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
        </select> <br>

        <img src="{{ asset("storage/$book->image") }}" width="100px" alt="" srcset="">
        <input type="file" name="image" id="">


        <button type="submit" class="btn btn-info">update</button>


    </form>



</div>
@endsection


@section('js')

@endsection
