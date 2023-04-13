<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }
    public function auth(Request $request){
        $data = $request->all();

        $remmember = isset($data['lembrar']) ? true : false;

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
    }

}
