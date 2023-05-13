<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <pre>
    @php
    print_r($req->all())    
    @endphp
</pre> --}}
    <h1>Form Data</h1>
    {{-- Name: {{$req['fname']}} --}}
    <h2> FirstName: {{$fname}}</h2> 
    <h2> LastName: {{$lname}}</h2> 
    

    
</body>
</html>