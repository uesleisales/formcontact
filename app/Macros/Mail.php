<?php

function send_mail($data = array(), $view = 'email.teste', $to = '', $name = '',$title = ''){

    try{
        \Illuminate\Support\Facades\Mail::send($view, $data, function (\Illuminate\Mail\Message $message) use($to, $name, $title) {
           
            $message
                ->to($to, $title)
                ->from(env('MAIL_ADDRESS_CONFIGURATION'), $name)
                ->subject($title);
        });
    }catch(Exception $e){
        echo $e->getMessage();
    }
        
}