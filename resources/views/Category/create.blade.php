@extends('layout')

@section('titel')

create categories

@endsection


@section('css')

@endsection

@section('content')



    @if($errors->any())

    @foreach ($errors->all() as $error )
    <div calss="alert alert-danger">{{ $error }}</div>

    @endforeach

    @endif

    <form action="{{ route("storeCategory") }}" method="POST">
          @csrf
        <input type="text" name="name" id=""> <br>
        <textarea name="desc" id=""></textarea> <br>

        <button type="submit" >create</button>


    </form>

    @endsection

    @section('js')

    @endsection
