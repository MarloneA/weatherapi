<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/weather', [WeatherController::class, 'getWeatherData']);
