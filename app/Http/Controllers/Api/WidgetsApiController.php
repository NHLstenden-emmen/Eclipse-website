<?php

namespace App\Http\Controllers\Api;

use App\Models\Widgets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WidgetsApiController extends ApiController
{
    public function index()
    {
        return Widgets::all();
    }

    public function getSpesificWidget(Request $request)
    {
        $response = Widgets::select('type','params')->where('type', $request->search)->first();
        return response([
            'success' => $response
        ]);
    }

    public function store(Request $request)
    {
        return Widgets::create([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
        ]);
    }
    
    public function update(Request $request)
    {
        $widget = Widgets::find($request->input('id'));

        $success = $widget->update([
            'type' => $request->input('type'),
            'params' => $request->input('params'),
        ]);
        
        return [
            'success' => $success
        ];
    }

    public function destroy(Widgets $widget)
    {
        $success = $widget->delete();

        return response([
            'success' => $success
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

        if ($checkresponse === 200) {
            return response([
                'success' => $response
            ]);
        } else {
            return response([
                'failed' => 'city is not found'
            ], 404);
        }
    }

    public function CheckCityId()
    {
        $response = 'wat wil je terug krijgen?';
        return response([
            'success' => $response
        ]);
    }
}
