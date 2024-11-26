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
       'client_id' => '894768458018-uvf5i5lutkdpr1pi8m1alcvh8ni9ldur.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback'
    ],
    // 'facebook' => [
    //     'client_id' => env('FACEBOOK_CLIENT_ID'),
    //     'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
    //     'redirect' => ('https://localhost:8000/auth/facebook/callback')
    // ],

    'github' => [
        'client_id' => ('Ov23ctaBSNBAcEXWG7Sf'),
        'client_secret' => ('b0e33da32480a8ce8661eb80a91598e518fdce5e'),
        'redirect' => ('http://127.0.0.1:8000/auth/github/callback')
    ],
];
