<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Customer Details</h1>
    {{-- <pre>
@php
    print_r($customers);
@endphp


{{-- {{$customers}} --}}
    </pre>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Update/Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $item)
                <tr>
                    {{-- {{ $item->firstName }} --}}
                    <td>{{$item->customerID}}</td>
                    <td>{{$item->firstName}}</td>
                    <td>{{$item->lastName}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td> <button class="btn btn-primary">Update</button> <button class="btn btn-danger">Delete</button> </td>
                </tr>
            @endforeach
       

        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
