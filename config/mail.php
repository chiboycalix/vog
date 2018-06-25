<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' =>env('MAIL_HOST', 'smtp.gmail.com'),
    'port' =>env('MAIL_PORT', 587),
    'from' => ['address' =>'igwechinonso1994@mail.com', 'name' => 'Nonso'],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' =>env('MAIL_USERNAME','igwechinonso1994@mail.com'),
    'password' =>env('MAIL_PASSWORD','08165842442'),
    'sendmail' =>'/usr/sbin/sendmail -bs',

    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
