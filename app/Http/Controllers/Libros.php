<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Libro;

class Libros extends Controller
{
    //
    public function listarLibros(){
        $libro = Libro::all();
    return view('ListadoLibro',['libro'=>$libro]);
    }
}
