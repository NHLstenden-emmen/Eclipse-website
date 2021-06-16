<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\weatherApi;

class WeatherApiController extends ApiController
{
    public function getWeather(Request $request) {
        $response = weatherApi::select('recentdata')->where('cityID', $request->cityID)->first();
        return response([
            'success' => $response['recentdata']
        ]);
	}

    public function weatherCityCheck(Request $request)
    {
        $apiKey = env('WEATHER_API_KEY');

        $response = Http::get('api.openweathermap.org/data/2.5/weather', [
            'q' => $request->city,
            'mode' => 'json',
            'appid' => $apiKey
        ]);

        $response = $response->json();
        $checkresponse = $response['cod'];
        $city_id = $response['id'];

        if ($checkresponse === 200) {
            return response([
                'success' => $checkresponse,
                'cityID' => $city_id
            ], 200);
        } else {
            return response([
                'failed' => $checkresponse
            ], 404);
        }
    }
}
