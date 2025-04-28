@extends('../layout')

@section('titel')
    register
@endsection

@section('css')

@endsection

@section('content')

{{-- error --}}
@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" style="color: red;">{{ $error }}</div>
    @endforeach
@endif




<div class="container w-50">
    <h1>Login Form</h1>

<form action="{{ route("handelLogin") }}" method="post">



        @csrf



        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>

        {{-- <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>






</form>

</div>
@endsection


@section('js')

@endsection
