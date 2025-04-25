@extends('layout')

@section('titel')
    update categories
@endsection

@section('css')

@endsection

@section('content')


    @if($errors->any())

    @foreach ($errors->all() as $error )
    <div class="alert alert-danger">{{ $error }}</div>

    @endforeach

    @endif

    <div class="container w-50" >
    <form action="{{ route("updateCategory",$category->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <input type="text" name="name" id="" class="form-control " rows="10" value="{{ $category->name }}"> <br>
        <textarea name="desc" id="" cols="30" class="form-control " rows="10" >{{ $category->desc }}</textarea> <br>

        <input type="file" name="image" id="">
        <img src="{{ asset("storage/$category->image") }}" width="100px" alt="" srcset="">
        <button type="submit" class="btn btn-info">update</button>

    </div>
        @endsection

        @section('js')

        @endsection

