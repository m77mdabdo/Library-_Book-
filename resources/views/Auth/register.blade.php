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
    <h1>Register Form</h1>

<form action="{{ route("handelRegister") }}" method="post">



        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Enter Name">

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation" placeholder="Confirm Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>







</form>

</div>
@endsection


@section('js')

@endsection
