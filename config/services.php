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

    'github' => [
        'client_id' => 'e7ced1b2337af00852be',         // Your GitHub Client ID
        'client_secret' => 'd821611c383a219f07c94a7fbb138123de4fe416', // Your GitHub Client Secret
        'redirect' => 'https://gobaby.com/login/github/callback',
    ],

    'weixin' => [
        'client_id' => 'wx55b90cf5280781c1',
        'client_secret' => '60285159c5484973ac6ae8b602e2cd8f',
        'redirect' => "https://charminglovesami.club/login/weixin/callback",
        'auth_base_uri' => 'https://open.weixin.qq.com/connect/qrconnect',

    ],


];
