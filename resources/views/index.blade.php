<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>UserName:  {{$userName}}</h1>
        {{$id}}
        @php
        $a = 123;
        $name ="<h1>Hassan Nadeem</h1>";    
        @endphp

{{$name}}
{!! $name !!}

@if ($a >= 0)
 <h4>   {{$a}} is greater than 0</h4>
 @else
 <h4>   {{$a}} is less than 0</h4>
@endif



{{-- @for ($i = 0; $i < 10; $i++)
    {{$i}}
@endfor --}}

@while ($a > 0 )
    @php
        echo $a;
        $a--;
    @endphp
    <br>
@endwhile



   <h1>Index page {{$a}}</h1>
        <script src="" async defer></script>
    </body>
</html>