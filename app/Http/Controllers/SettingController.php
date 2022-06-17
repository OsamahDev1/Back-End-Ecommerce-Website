<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected function showsettingspage ()
    {
        return view('settings');
    }
}
