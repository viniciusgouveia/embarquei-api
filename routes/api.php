<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('horarioTrajeto', 'HorarioTrajetoController');

Route::get('usuarios/tipo-usuario/{id}', 'UsuarioController@tipoById')->middleware('auth:api');

Route::group(['prefix' => 'motoristas', 'middleware' => 'auth:api'], function() {
    Route::post('/', 'MotoristaController@store');
    Route::get('/', 'MotoristaController@index');
    Route::get('/{id}', 'MotoristaController@show');
    Route::delete('/{id}', 'MotoristaController@destroy');
    Route::put('/{id}', 'MotoristaController@update');
    Route::get('/cidade/{cidadeId}', 'MotoristaController@filtrarPorCidade');
});


Route::apiResource('administradores', 'AdministradorController')->middleware('auth:api');

Route::apiResource('instituicoesEnsino', 'InstituicaoEnsinoController');

Route::apiResource('cursos', 'CursoController');

Route::group(['prefix' => 'checkin', 'middleware' => 'auth:api'], function() //->middleware('auth:api');
{
    Route::post('/', 'CheckinController@store');
    Route::get('/', 'CheckinController@index');
    Route::get('/estudante/{id}', 'CheckinController@buscarPorEstudante');
    Route::get('/{id}', 'CheckinController@show');
    Route::put('/{id}', 'CheckinController@update');
    Route::delete('/{id}', 'CheckinController@destroy');
});

Route::get('cidades/comRota', 'CidadeController@buscarCidadesComRotas');
Route::group(['prefix' => 'cidades', 'middleware'=> 'auth:api'],  function() // , 'middleware'=> 'auth:api'
{
    Route::post('/', 'CidadeController@store');
    Route::get('/', 'CidadeController@index');
    Route::get('/nome/{nome}', 'CidadeController@showByNome');
//    Route::get('/comRota', 'CidadeController@buscarCidadesComRotas');
    Route::get('/{id}', 'CidadeController@show');
    Route::put('/{id}', 'CidadeController@update');
    Route::delete('/{id}', 'CidadeController@destroy');
});

Route::apiResource('listaPresenca', 'ListaPresencaController')->middleware('auth:api');;

Route::apiResource('veiculosTransporte', 'VeiculoTransporteController')->middleware('auth:api');

Route::apiResource('rotas', 'RotaController')->middleware('auth:api');

Route::get('pontosParada/{cidade}/{instituicaoEnsino}/{rota}', 'PontoParadaController@buscarPontosParadaByCidadeInstituicaoRota');

Route::get('trajetos/{cidade}/{instituicaoEnsino}', 'TrajetoController@buscarTrajetosByCidadeInstituicaoRota');

Route::post('estudantes', 'EstudanteController@store');
Route::group(['prefix' => 'estudantes', 'middleware' => 'auth:api'], function()
{
    Route::get('/', 'EstudanteController@index');
    Route::get('/{id}', 'EstudanteController@show');
    Route::delete('/{id}', 'EstudanteController@destroy');
    Route::put('/{id}', 'EstudanteController@update');
    Route::get('/cidade/{cidadeId}', 'EstudanteController@filtrarPorCidade');
    Route::put('/ativo/{id}', 'EstudanteController@alterarStatus');
});


Route::post('authenticate', 'AuthController@auth');
Route::any('authenticate/refresh', 'AuthController@refresh');
Route::delete('logout', 'AuthController@logout')->middleware('auth:api');

/*
 *  quando a autenticação falha (access token inválido), automaticamente
 *  o laravel redireciona para a rota /login, que chama o metodo refresh
 *  para renovar o access token
 */
Route::any('login', 'AuthController@refresh')->name('login');


// CRIAR UM MIDDLEWARE QUE FILTRE AS REQUISIÇÕES DE ACORDO COM O ADMIN QUE FEZ,
// E RETORNE APENAS OS DADOS DE INTERESSE DELE