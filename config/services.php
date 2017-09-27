<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
   //Id suministrado por google        
   'client_id'     => '555550218530-e0bp6qu5e38bihq4aikfdene996aek98.apps.googleusercontent.com', 
   //Secret suministrado por google 
   'client_secret' => 'ZSmkZ_NlLddLB6ZofAp42sPX',
   //Página a la que sera redireccionado el navegador cuando el login se exitoso 
   //Ejemplo: http://midominio.com/social/handle/google
   'redirect'      => 'http://localhost:8000/login/google/callback',
]

];
