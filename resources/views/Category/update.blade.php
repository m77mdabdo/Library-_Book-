@extends('layout')

@section('titel')
    update categories
@endsection

@section('css')

@endsection

@section('content')


    @if($errors->any())

    @foreach ($errors->all() as $error )
    <div calss="alert alert-danger">{{ $error }}</div>

    @endforeach

    @endif

    <div class="container w-50" >
    <form action="{{ route("updateCategory",$category->id) }}" method="POST">
          @csrf
          @method('PUT')
        <input type="text" name="name" id="" class="form-control " rows="10" value="{{ $category->name }}"> <br>
        <textarea name="desc" id="" cols="30" class="form-control " rows="10" >value="{{ $category->desc }}"</textarea> <br>

        <button type="submit" class="btn btn-info">update</button>


        @endsection
    </div>
        @section('js')

        @endsection

