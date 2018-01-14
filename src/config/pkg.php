<?php 

return [

    /*
    |--------------------------------------------------------------------------
    | Auth Token
    |--------------------------------------------------------------------------
    |
    | This value is the token of your application for SMS Poh.
    | You can find it on profile/api-credential/auth-key
    |
    */

    'token' => env('PKG_TOKEN', 'your_token'),

    /*
    |--------------------------------------------------------------------------
    | API endpoint
    |--------------------------------------------------------------------------
    |
    | This value is the entry point for api 
    |
    */

    'end_point' => env('PKG_ENDPOINT', 'https://test')
];