<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    protected function ShowSignuppage()
    {
        return view('Auth.register');
    }
}
