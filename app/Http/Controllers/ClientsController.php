<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients()
    {
        return view('admin.clients.clients');
    }
    public function create()
    {
        $users = User::all();
        return view('admin.clients.create_client', compact('users'));
    }
}
