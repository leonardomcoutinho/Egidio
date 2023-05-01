<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Clients;
use App\Models\Config;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ClientsController extends Controller
{
    public function clients()
    {
        $config = Config::all()->first();
        $clients = Clients::with('User')->get();
        return view('admin.clients.clients', compact('clients', 'config'));
    }
    public function create()
    {
        $config = Config::all()->first();
        $users = User::all();
        return view('admin.clients.create_client', compact('users', 'config'));
    }
    public function store(Request $request)
    {
        try {

            $client = new Clients;

            $client->user_id = $request->user_id;
            $client->name = $request->name;
            $client->type = $request->type;
            if ($request->cpf) {
                $client->document = $request->cpf;
            }
            if ($request->cnpj) {
                $client->document = $request->cnpj;
            }
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->cep = $request->cep;
            $client->rua = $request->rua;
            $client->bairro = $request->bairro;
            $client->cidade = $request->cidade;
            $client->estado = $request->estado;
            $client->complemento = $request->complemento;

            $client->save();
            return redirect()->route('clients')->with('success', 'Cliente cadastrado com sucesso!');
        } catch (\Throwable $th) {
            return redirect()->route('create_client')->with('error', 'Cliente não foi cadastrado - ' . $th);
        }
    }
    public function edit($id)
    {
        $config = Config::all()->first();
        $client = Clients::findOrFail($id);
        $vendedor = User::where('id', $client->user_id)->first();
        return view('admin.clients.edit', compact('client', 'vendedor', 'config'));
    }
    public function update(Request $request)
    {
        Clients::findOrFail($request->id)->update($request->all());
        return redirect()->route('clients')->with('success', 'Dados alterados com sucesso!');
    }
    public function delete($id)
    {
        Clients::findOrFail($id)->delete();
        return redirect()->route('clients')->with('success', 'Cliente deletado com sucesso!');
    }
}
