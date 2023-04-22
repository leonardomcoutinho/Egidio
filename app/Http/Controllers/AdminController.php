<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $vendedores = User::where('vendedor', true)->get();
        return view('admin.index', compact('vendedores'));
    }
}
