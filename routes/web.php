<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inicio;
use App\Http\Controllers\Editoriales;
use App\Http\Controllers\Libros;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [inicio::class, 'index']); 

Route::get('/inicio', [inicio::class, 'principio']); 

Route::get('/Editoriales', [Editoriales::class, 'listar']); 
Route::post('/registrar', [Editoriales::class, 'registrar']); 
Route::get('/registrar', [Editoriales::class, 'registrar1']); 
Route::get('/libros', [Libros::class, 'listarLibros']); 


