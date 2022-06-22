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

Route::get('/', 'PrincipalController@principal' );
Route::get('/sobre-nos', 'SobreNosController@sobreNos' );
Route::get('/contato', 'ContatoController@contato' );

Route::get('/contato/{nome}/{categoria_id}',
    function(
        string $nome, 
        int $categoria_id=1 // 1- Informação
    ) {
        echo "Estamos aqui: $nome - $categoria";
    }
)->where('nome','[A-Za-z]+')->where('categoria_id', '[0-9]+');