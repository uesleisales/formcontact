<?php


$router->get('/',['as' => 'contato.site', 'uses' => 'ContatoController@index']);

$router->get('/submit', function(){
    return redirect()->route('contato.site');
});

$router->post('/submit',['as' => 'contato.submit', 'uses' => 'ContatoController@store']);

$router->get('/testando',function(){
    return view('email.teste');
});
