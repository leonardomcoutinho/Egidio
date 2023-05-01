<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        $config = Config::all()->first();
        return view('login', compact('config'));
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
        $config = Config::all()->first();
        $users = User::all();
        return view('admin.cadastro.users', compact('users', 'config'));
    }
    public function create()
    {
        $config = Config::all()->first();
        return view('admin.cadastro.create_user', compact('config'));
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
            return redirect()->route('users')->with('success', 'Usuario cadastrado com sucesso');
        } else {
            return redirect()->route('create_user')->with('error', 'Erro ao cadastrar usuario');
        }
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $config = Config::all()->first();
        return view('admin.cadastro.edit_user', compact('user', 'config'));
    }
    public function update(Request $request)
    {
        User::findOrFail($request->id)->update($request->all());
        return redirect()->route('users')->with('success', 'Dados alterados com sucesso!');
    }
    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users')->with('success', 'Usuario deletado com sucesso!');
    }
}
