<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContatoService;


class ContatoController extends Controller
{
    
    public function index(){
        return view('contato.index');     
    }   

    public function store(Request $request){

        if(ContatoService::valide($request) != null){
            return ContatoService::valide($request);
        }

        $contato = ContatoService::store($request);
        return $contato;
    }

    public function email()
    {
        $data = ['teste data'];
        \Illuminate\Support\Facades\Mail::send('email.teste', $data, function (\Illuminate\Mail\Message $message) {
            $message
                ->to('wesleijt10@gmail.com', 'foo_name')
                ->from('wesleijt@hotmail.com', 'bar_name')
                ->subject('Teste email');
        });

    }
}
