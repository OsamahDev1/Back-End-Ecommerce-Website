<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    protected function showsuccesspage ()
    {
        return view('success');
    }
}
