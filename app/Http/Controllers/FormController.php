<?php

namespace App\Http\Controllers;

use App\Models\Customers;
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
        // $req->validate([
        //     $req['fname'] => 'required',
        //     $req['lname'] => 'required',
        //     $req['email'] => 'required',
        //     $req['password'] => 'required',


        // ]);

        // print_r($req->all());
        // return view('data');

        $fname = $req['fname'];
        $lname = $req['lname'];
        $email = $req['email'];
        $password = $req['password'];

        $customer = new Customers();
        $customer->firstName = $fname;
        $customer->lastName = $lname;
        $customer->email = $email;
        $customer->password = $password;
        $customer->save();
        echo "<script>alert('Registration Successfull !')</script>";
        echo "<script>window.location.href = '/form'</script>";
        // return redirect('/form');


        // print_r($req->all());
        // echo $req['fname'];
        // $data = compact('req');
        // $data = compact('fname','lname','email','password');
        // echo "Submitted";
        // return view('data')->with($data);
    }

    function show()
    {
$customers = Customers::all();

// echo "<pre>";
//    print_r($customers->toArray());

//    echo "</pre>";
$data =  compact('customers');

   return view("showData")->with($data);



    }


}