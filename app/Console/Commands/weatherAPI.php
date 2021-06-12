<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class weatherAPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'WeatherApi:Update {location}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the weather api data for a spesific location';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $apiKey = env('WEATHER_API_KEY');

        $response = Http::get('api.openweathermap.org/data/2.5/weather', [
            'q' => $this->argument('location'), 
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        $response = $response->json();

        $temp = $response['main']['temp'];

        $icon = $response['weather'][0]['icon'];
        $weather = $response['weather'][0]['main'];
        $description = $response['weather'][0]['description'];

        Widgets::query()->updateOrCreate(['type' => sprintf('weather:%s', $this->argument('location'))], 
        ['recentdata' => "
            main: ".$weather.' ,
            icon: '.$icon.' ,
            temp: '.$temp.' ,
            location: '.$this->argument('location')
        ]);
    }
}
