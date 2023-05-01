<?php

namespace App\Http\Controllers;

use App\Imports\SellImport;
use App\Models\Config;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SellController extends Controller
{
    public function index()
    {
        $config = Config::all()->first();
       return view('admin.sell.sell', compact('config'));
    }
    public function importSell(Request $request)
    {
        //dd($request->file);
        Excel::import(new SellImport, $request->file);

        return redirect()->route('sell')->with('success', 'Vendas importadas com sucesso!');
    }
}
