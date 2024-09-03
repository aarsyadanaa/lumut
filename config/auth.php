<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

   'defaults' => [
    'guard' => 'web',
    'passwords' => 'accounts',
],

'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'accounts',
    ],

    'api' => [
        'driver' => 'token',
        'provider' => 'accounts',
        'hash' => false,
    ],
],

'providers' => [
    'accounts' => [
        'driver' => 'eloquent',
        'model' => App\Models\Account::class,
    ],
],

'passwords' => [
    'accounts' => [
        'provider' => 'accounts',
        'table' => 'password_resets',
        'expire' => 60,
    ],
],


    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
