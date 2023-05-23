<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ $heading }}</title>
</head>

<body class="container">
    <a href="{{url('/')}}/show"> <button class="btn btn-primary">Show</button></a>
    {{-- <a href=""> <button class="btn btn-primary"></button></a>
    <a href=""> <button class="btn btn-primary">Show</button></a> --}}
    {{-- {{@message}} --}}

    <h1>{{ $heading }} </h1>
    {{-- {{ $customer }} --}}
    <form action="{{ url('/') }}{{ $route }}" method="post">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="form-outline">
            <input type="hidden" id="form3Example1" name="id" class="form-control" value="<?php if (isset($customer->customerID)) {
                echo $customer->customerID;
            } else {
                echo '';
            } ?>" />

        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example1" name="fname" class="form-control"
                        value="<?php if (isset($customer->firstName)) {
                            echo $customer->firstName;
                        } else {
                            echo '';
                        } ?>" />
                    <label class="form-label" for="form3Example1">First name</label>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <input type="text" id="form3Example2" name="lname" class="form-control"
                        value="<?php if (isset($customer->lastName)) {
                            echo $customer->lastName;
                        } else {
                            echo '';
                        } ?>" />
                    <label class="form-label" for="form3Example2">Last name</label>
                </div>
            </div>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control" value="<?php if (isset($customer->email)) {
                echo $customer->email;
            } else {
                echo '';
            } ?>" />
            <label class="form-label" for="form3Example3">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" id="form3Example4" name="password" class="form-control"
                value="<?php if (isset($customer->password)) {
                    echo $customer->password;
                } else {
                    echo '';
                } ?>" />
            <label class="form-label" for="form3Example4">Password</label>
        </div>

        <!-- Checkbox -->
        {{-- <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
            <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
            </label>
        </div> --}}

        <!-- Submit button -->
        <button type="submit" name="register" class="btn btn-primary btn-block mb-4">{{ $btnTxt }}</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>or sign up with:</p>
            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-github"></i>
            </button>
        </div>
    </form>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

</body>

</html>
