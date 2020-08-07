<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome(Request $request) {
        // dd($request->all());
        $fname = $request['fname'];
        $lname = $request['lname'];
        $full_name = "$fname $lname";
        dd($full_);
        // dd($full_name);
        return view('welcome2', compact('full_name'));
    }
}
