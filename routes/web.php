<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/',['as' => 'contato.site', 'uses' => 'ContatoController@index']);
$router->get('/email',['as' => 'site.email', 'uses' => 'ContatoController@email']);

$router->get('/submit', function(){
    return redirect()->route('contato.site');
});
$router->post('/submit',['as' => 'contato.submit', 'uses' => 'ContatoController@store']);
