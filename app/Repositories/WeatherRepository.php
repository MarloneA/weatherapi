<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;
use App\DTOs\CoordinatesDTO;

class WeatherRepository
{
    public function getCoordinates($city)
    {
        $apiKey = config('services.geocoding.key');
        $googleUrl = config('services.googleurl.key');

        $apiUrl = "https://{$googleUrl}?address={$city}&key={$apiKey}";

        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $data = $response->json();

            if (isset($data['results'][0]['geometry']['location'])) {
                return new CoordinatesDTO(
                    $data['results'][0]['geometry']['location']['lat'],
                    $data['results'][0]['geometry']['location']['lng']
                );
            }
        }

        return null;
    }

    public function fetchWeatherData(CoordinatesDTO $coordinatesDTO, $units)
    {
        $apiKey = config('services.openweathermap.key');
        $openweatherUrl = config('services.openweatherurl.key');

        $apiUrl = "https://{$openweatherUrl}?lat={$coordinatesDTO->lat}&lon={$coordinatesDTO->lng}&appid={$apiKey}&units={$units}&exclude=hourly,minutely";

        $response = Http::get($apiUrl);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}


