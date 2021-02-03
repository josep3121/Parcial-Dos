<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Editorial;

class Editoriales extends Controller
{
    // consultar editoriales con Eloquent
    public function listar(){
        $editorial = editorial::all();
    return view('ListadoEditorial',['editorial'=>$editorial]);
    }

    public function registrar(Request $request){
        $editorial= new editorial();
        $editorial->nombre = $request->input('name');
        $editorial->direccion = $request->input('dir');
        $editorial->ciudad = $request->input('ciu');
        $editorial->telefono = $request->input('tel');
       
        $editorial->save();
        return redirect()->route('ListadoEditorial');

    
    }
    public function registrar1(Request $request){
       
        return view('registrar');

    
    }
    
}
