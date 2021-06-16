<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\weatherApi;

class weatherApiUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:Update {CityID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the weather api data for a spesific CityID';

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
            'id' => $this->argument('CityID'), 
            'appid' => $apiKey,
            'units' => 'metric'
        ]);

        $response = $response->json();

        $temp = $response['main']['temp'];

        $icon = $response['weather'][0]['icon'];
        $weather = $response['weather'][0]['main'];
        $location = $response['name'];

        weatherApi::query()->updateOrCreate(['cityID' => $this->argument('CityID')], 
        ['recentdata' => "
            main: ".$weather.' ,
            icon: '.$icon.' ,
            temp: '.$temp.' ,
            location: '.$location.' ,
            cityid: '.$this->argument('CityID')
        ]);
    }
}
