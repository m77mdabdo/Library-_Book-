<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield(
        'titel')</title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ url("register") }}">Register</a></li>
        <li><a href="{{ url("login") }}">Login</a><</li>
        <li>

            <form action="{{ url("logout") }}" method="post"></form>

            @csrf
            <button type="submit" class="btn btn-danger">logout</button>


        </li>
    </ul>
</nav>

@yield(
    'content'
)


@yield('js')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
