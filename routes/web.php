<?php

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


Route::get('/log', function(){
//    Log::emergency("Mensagem de emergencia");
//    Log::alert("Mensagem de alerta");
//    Log::critical("Mensagem critica");
//    Log::error("Mensagem de erro");
//    Log::warning("Mensagem de aviso");
//    Log::notice("Mensagem de noticia");
//    Log::debug("Mensagem de DEBUG");
    Log::info("Mensagem de Informação.", ['id'=> 25, 'nome' => 'Felipe Urbanski']);
});
