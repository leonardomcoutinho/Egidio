<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config()            
    {
        return view('admin.config.config');
    }
}
