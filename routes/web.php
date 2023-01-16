<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function (){
   return view(
       'index',
       ['nombre'=>'Carlos',
           'apellidos'=>'Gabriel',
           'parametros'=>[
                'tiempo'=>25,
                'carga'=>'lazy']
   ]);
});

Route::get('/',function (){
    $nombre='Carlos';
    $apellidos='Martinez';
    $opciones=['tiempo'=>25,'carga'=>'lazy'];

    return view('index',compact('nombre','apellidos','opciones'));
});


Route::get('/pista',function(){
    return view('pistas');
});
