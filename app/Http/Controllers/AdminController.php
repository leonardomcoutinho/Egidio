<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Config;
use App\Models\Sell;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() 
    {
        $config = Config::all()->first();
        $vendedores = User::where('vendedor', true)->get();

        $clientes = Clients::all();
        $sells = Sell::all();
        $jan = Sell::where("data_inicial", ">=", "".date('Y')."-01-01")->where("data_final", "<=", "".date('Y')."-02-01")->sum('valor');
        $fev = Sell::where("data_inicial", ">=", "".date('Y')."-02-01")->where("data_final", "<=", "".date('Y')."-03-01")->sum('valor');
        $mar = Sell::where("data_inicial", ">=", "".date('Y')."-03-01")->where("data_final", "<=", "".date('Y')."-04-01")->sum('valor');
        $abr = Sell::where("data_inicial", ">=", "".date('Y')."-04-01")->where("data_final", "<=", "".date('Y')."-05-01")->sum('valor');
        $mai = Sell::where("data_inicial", ">=", "".date('Y')."-05-01")->where("data_final", "<=", "".date('Y')."-06-01")->sum('valor');
        $jun = Sell::where("data_inicial", ">=", "".date('Y')."-06-01")->where("data_final", "<=", "".date('Y')."-07-01")->sum('valor');
        $jul = Sell::where("data_inicial", ">=", "".date('Y')."-07-01")->where("data_final", "<=", "".date('Y')."-08-01")->sum('valor');
        $ago = Sell::where("data_inicial", ">=", "".date('Y')."-08-01")->where("data_final", "<=", "".date('Y')."-09-01")->sum('valor');
        $set = Sell::where("data_inicial", ">=", "".date('Y')."-09-01")->where("data_final", "<=", "".date('Y')."-10-01")->sum('valor');
        $out = Sell::where("data_inicial", ">=", "".date('Y')."-10-01")->where("data_final", "<=", "".date('Y')."-11-01")->sum('valor');
        $nov = Sell::where("data_inicial", ">=", "".date('Y')."-11-01")->where("data_final", "<=", "".date('Y')."-12-01")->sum('valor');
        $dez = Sell::where("data_inicial", ">=", "".date('Y')."-12-01")->where("data_final", "<=", "".date('Y')."-01-01")->sum('valor');

        $vendasValor = DB::table('sells')->sum('valor');

        return view('admin.index', compact('config','vendedores', 'clientes', 'vendasValor', 'sells', 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'));
    }
}
