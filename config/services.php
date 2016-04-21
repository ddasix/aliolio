<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'github' => [
        'client_id' => 'eda54157c6a8d413ed71',
        'client_secret' => '8d2ee3aec0b9ed2a4af3dc069c3fbdbb5234fbc9',
        'redirect' => 'https://'.env('DOMAIN').'/auth/github/callback',
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect' => 'https://'.env('DOMAIN').'/auth/facebook/callback',
    ],
    'naver' => [
        'client_id' => env('NAVER_ID'),
        'client_secret' => env('NAVER_SECRET'),
        'redirect' => 'https://'.env('DOMAIN').'/auth/naver/callback',
    ],
    'instagram' => [
        'client_id' => env('INSTA_ID'),
        'client_secret' => env('INSTA_SECRET'),
        'redirect' => 'https://'.env('DOMAIN').'/auth/instagram/callback',
    ],
    'kakao' => [
        'client_id' => env('KAKAO_ID'),
        'client_secret' => env('KAKAO_SECRET'),
        'redirect' => 'https://'.env('DOMAIN').'/auth/kakao/callback',
    ],
];
