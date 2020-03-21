<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
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
    'google' => [
        'client_id' => '102153046103977736055',
        'client_secret' => '05c2276f7b580ff6cabcebeb5fbcf53600484f20',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'linkedin' => [
        'client_id' => '77obx3gciajacf',
        'client_secret' => 'osaY0EhKRmsqssmt',
        'redirect' => 'http://127.0.0.1:8000/callback/linkedin',
      ], 
      'facebook' => [
        'client_id' => '158541148240761',
        'client_secret' => '0f2f89a8e414048535d6f1348b5ea5c1',
        'redirect' => 'http://localhost:8000/callback/facebook',
    ],
];
