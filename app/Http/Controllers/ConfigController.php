<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config()
    {
        $config = Config::all()->first();
        
        return view('admin.config.config', compact('config'));
    }
    public function tema(Request $request){
       
        Config::findOrFail($request->id)->update($request->all());
        return redirect()->route('config')->with('success', 'Configurações alteradas com sucess!');
      

        
    }
}
