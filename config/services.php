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
    'facebook' => [
        'client_id' => '1253276624733521',
        'client_secret' => '91609bfb755ac8dd2ce0998ab6340f2a',
        'redirect' => 'http://localhost.onlinestore.com/handleProviderCallback/facebook',
    ],
    'google' => [
        'client_id' => '187152844706-53otq0n1dpq0i6t0va6hateuv4v2jleu.apps.googleusercontent.com',
        'client_secret' => 'H_0UH5ol8XLGhpdozbwi3Zw8',
        'redirect' => 'http://localhost.onlinestore.com/handleProviderCallback/google',
    ],
    'linkedin' => [
        'client_id' => '81rg16n1uthkvt',
        'client_secret' => 'nlUWuZpYafyodm3E',
        'redirect' => 'http://localhost.onlinestore.com/',
    ],
    'instagram' => [
        'client_id' => 'a4a0c6552704426bba3810be35529d2d',
        'client_secret' => 'b221013f55124661ae6d4ca242adc42a',
        'redirect' => 'http://localhost.onlinestore.com/',
    ],

];
