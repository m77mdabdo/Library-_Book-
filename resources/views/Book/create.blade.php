@extends('layout')


@section('titel')
   Create Book
@endsection

@section('css')

@endsection

@section('content')

@if($errors->any())

    @foreach ($errors->all() as $error )
    <div calss="alert alert-danger">{{ $error }}</div>

    @endforeach

    @endif

    <form action="{{ route("storeBook") }}" method="post" enctype="multipart/form-data">

        @csrf
        <input type="text" name="title" id=""> <br>
        <textarea name="desc" id=""></textarea> <br>
        <input type="number" name="price" id=""> <br>

        <select name="category_id" id="" >
            @foreach ($categories as $category )
                <option value="{{ $category->id }}">{{ $category->name }}</option>

                @endforeach
        </select> <br>

        <input type="file" name="image" id=""><br>



        <button type="submit" >create</button>





    </form>

@endsection


@section('js')

@endsection


