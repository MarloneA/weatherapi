<?php

namespace App\Services;

use App\Repositories\WeatherRepository;
use App\DTOs\CoordinatesDTO;

class WeatherService
{
    protected $weatherRepository;

    public function __construct(WeatherRepository $weatherRepository)
    {
        $this->weatherRepository = $weatherRepository;
    }

    public function getWeatherData($city, $units)
    {
        $coordinatesDTO = $this->weatherRepository->getCoordinates($city);

        if (!$coordinatesDTO) {
            return null;
        }

        return $this->weatherRepository->fetchWeatherData($coordinatesDTO, $units);
    }
}
