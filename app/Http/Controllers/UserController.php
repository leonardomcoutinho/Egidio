<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login');
    }
    public function auth(Request $request)
    {
        $data = $request->all();

        $remmember = isset($data['lembrar']) ? true : false;

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->route('dashboard');
        } else {
            return redirect('/');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function users()
    {
        $users = User::all();
        return view('admin.cadastro.users', compact('users'));
    }
    public function create()
    {
        return view('admin.cadastro.create_user');
    }
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6 ',
            'confirm_password' => 'required|min:6 ',
        ]);
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;

        dd($request->nivel);
        if ($request->nivel == 1) {
            $user->admin_master = 1;
            $user->admin = 0;
            $user->vendedor = 0;
        } else if ($request->nivel == 2) {
            $user->admin_master = 0;
            $user->admin = 1;
            $user->vendedor = 0;
        } else if ($request->nivel == 3) {
            $user->admin_master = 0;
            $user->admin = 0;
            $user->vendedor = 1;
        }
        if (!empty($validate) && $request->password == $request->confirm_password) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('users')->with('success','Usuario cadastrado com sucesso');
        }else{
            return redirect()->route('create_user')->with('error','Erro ao cadastrar usuario');
        }
    }
}
