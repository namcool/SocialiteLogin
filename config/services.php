<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],
    
    'facebook' => [
        'client_id' => '1855210781290690',
        'client_secret' => 'f98a90939d060d5e79a419d12a3ae0a6',
        'redirect' => 'http://localhost/SocialiteLogin/public/callback/facebook',
    ], 

    'google' => [
        'client_id' => '472171412547-k78tdlptet8ak51t2f7lght7pfcnk9tk.apps.googleusercontent.com',
        'client_secret' => '6i6quN8zZix3ZcH6-5IJxTIz',
        'redirect' => 'http://localhost/SocialiteLogin/public/callback/google',
    ], 

];
