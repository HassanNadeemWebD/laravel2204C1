<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function getForm()
    {
$heading = "Registration Form";
$route = "/form";
$btnTxt = "Register";
$data = compact('heading','route','btnTxt');
        return view('form')->with($data);
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
        $data = compact('customers');

        return view("showData")->with($data);



    }
    function edit($id)
    {
        $customer = Customers::find($id);
        $route = '/update';
        $heading = "Edit Information";
        $btnTxt = "Update";
        $data = compact('customer','heading','route','btnTxt');

        // print_r($customer->toArray());

        // echo $id;
        return view('form')->with($data);
    }

    function update(Request $req)
    {
        $id = $req['id'];
        $fname = $req['fname'];
        $lname = $req['lname'];
        $email = $req['email'];
        $password = $req['password'];
        $customer = Customers::find($id);
        $customer['firstName'] = $fname ; 
        $customer['lastName'] = $lname ; 
        $customer['email'] = $email ; 
        $customer['password'] = $password ; 
        $customer->save();

        return redirect('/show');
        // print_r($customer);
    //    print_r($req->all());
    }



    function delete($id)
    {
        $customer = Customers::find($id);
       $customer->delete();

       return redirect('/show');
    }


}