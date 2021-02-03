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

    public function registrar(){
        $editorial = editorial::all();
    return view('ListadoEditorial',['editorial'=>$editorial]);
    }
    
}
