<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;

class RegisterController extends Controller
{
    //register view
    protected function ShowRegisterpage()
    {
        return view('Auth.register');
    }
    

    //register start here
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;
    //register end here




    public function __construct()
    {
        $this->middleware('guest');
    }
    
    // protected function validator(array $data)
    // {
    //     return validator::make($data,[
    //         'dfsd' => ['sdfs'],
    //     ]);
    // }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'contact' => $data['phone'],
            'city' => $data['city'],
            'address' => $data['address'],
        ]);
    }
}
