<?php

return [
    'driver' => env('MAIL_DRIVER', 'sendgrid'),
    'mailers' => [
        'sendgrid' => [
            'transport' => 'sendgrid' ,
       ],
   ],
];