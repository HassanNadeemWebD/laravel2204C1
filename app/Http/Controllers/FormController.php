<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getForm()
    {

        return view('form');
    }
    function edit()
    {

        return view('welcome');
    }

    function getData(Request $req)
    {

        $fname = $req['fname'];
        $lname = $req['lname'];
        $email = $req['email'];
        $password = $req['password'];

        // print_r($req->all());
        // echo $req['fname'];
// $data = compact('req');
$data = compact('fname','lname','email','password');

        return view('data')->with($data);
    }
}
