<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected function ShowIndexpage()
    {
        return view('index');
    }
}
