<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function getWeatherData(Request $request)
    {
        $city = $request->input('city', 'Nairobi');
        $units = $request->input('units', 'metric'); // Default to Celsius

        $weatherData = $this->weatherService->getWeatherData($city, $units);

        if (!$weatherData) {
            return response()->json(['error' => 'Unable to fetch weather data'], 500);
        }

        return response()->json($weatherData);
    }
}
