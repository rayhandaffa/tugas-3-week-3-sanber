<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register(){
        return view('page.form');
    }
    public function submit(Request $request){
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        return view('page.welcome', compact('firstname', 'lastname'));
    }
}
