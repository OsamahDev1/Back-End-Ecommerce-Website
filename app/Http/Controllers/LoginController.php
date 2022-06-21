<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    protected function ShowLoginPage()
    {
        return view('Auth.login');
    }
    
    //Login start here
    use AuthenticatesUsers;
    //Login end here
    protected $redirectTo = RouteServiceProvider::HOME;

    
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }



}
