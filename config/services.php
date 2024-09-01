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

    'openweathermap' => [
        'key' => env('OPENWEATHERMAP_API_KEY'),
    ],

    'geocoding' => [
        'key' => env('GEOCODING_API_KEY'),
    ],

    'openweatherurl' => [
        'key' => env('OPENWEATHERMAP_URL'),
    ],
    'googleurl' => [
        'key' => env('GOOGLE_URL'),
    ],

];
