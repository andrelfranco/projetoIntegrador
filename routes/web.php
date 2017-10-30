<?php

/*s
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

Route::resource('cooperativas', 'CooperativaController');

Route::resource('veiculos', 'VeiculosController');

Route::resource('funcionarios', 'FuncionariosController');

Route::resource('produtores', 'ProdutoresController');

Route::group(['prefix' => 'cooperativas', 'as' => 'cooperativas.'], function() {
    Route::name('adicionarAdm')->get('{cooperativa}/adicionar_adm', 'CooperativaController@adicionarAdm');
    Route::name('storeAdm')->post('{cooperativa}/store_adm', 'CooperativaController@storeAdm');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

