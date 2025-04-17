<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- FullName:{{  $fullName  }}=> with  --}}
    {{-- FullName:{{  $data  }}=> ["key"=>"value"] --}}
    {{-- FullName:{{  $fullName  }}=>compact    --}}

       <!-- get all -->
    {{-- @foreach ($posts as $post )

     {{ $post ->title }} <br>
     {{ $post->body }} <hr>

    @endforeach

    <hr>
    <hr>

    @foreach ($allPosts as $post2 )

     {{ $post2 ->title }} <br>
     {{ $post2->body }} <br>
     {{ $post2->image }} <hr>


    @endforeach --}}



   <!-- condetion -->
 @foreach ($posts as $post )

     {{ $post->title }} <br>
     {{ $post->body }} <hr>

    @endforeach

    <hr>

</body>
</html>
