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

Route::group(['middleware' => 'auth:api'], function() {
 
    Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');

    Route::get('produtos', 'ProdutosController@index');
    Route::get('produtos/{article}', 'ProdutosController@show');
    Route::post('produtos', 'ProdutosController@store');
    Route::put('produtos/{article}', 'ProdutosController@update');
    Route::delete('produtos/{article}', 'ProdutosController@delete');

    Route::get('funcionarios', 'FuncionariosController@index');
    Route::get('funcionarios/{livros}', 'FuncionariosController@show');
    Route::post('funcionarios', 'FuncionariosController@store');
    Route::put('funcionarios/{livros}', 'FuncionariosController@update');
    Route::delete('funcionarios/{livros}', 'FuncionariosController@delete');

    Route::get('locacoes', 'LocacoesController@index');
    Route::get('locacoes/{locacoes}', 'LocacoesController@show');
    Route::post('locacoes', 'LocacoesController@store');
    Route::put('locacoes/{locacoes}', 'LocacoesController@update');
    Route::delete('locacoes/{locacoes}', 'LocacoesController@delete');
});

Route::post("register", 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
?>