<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login() {
    // Getting all post data
        if(Request::ajax()) {
        $data = Input::all();
        print_r($data);
        die;
        }
    }

    public function store(Request $request)
    {
       //echo $request;
       //echo 
       //return $request->json();
       $input = $request->all();
       $name = $request->input('email');
       $habit = $request->input('habit');
       $tall = $request->input('tall');
       $password = $request->input('password');

        dd(
            $input,
            $name,
            $habit,
            $tall,
            $password 
        //$request->json()->get('email') //,
       // $request->json()->all()
       );
      // return $request->json()->get('email');    //$request->getContent();
    }
    
}
