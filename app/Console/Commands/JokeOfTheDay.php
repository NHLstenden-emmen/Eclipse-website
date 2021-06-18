<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class JokeOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jokeOfTheDay:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Api for the daily jokes';

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
        $response = Http::accept('application/json')->get('https://icanhazdadjoke.com');
        
        $response = $response->json();
        if($response['status'] === 200){
            $joke = $response['joke'];
            Widgets::query()->updateOrCreate(
                ['type' => 'joke_of_the_day'], 
                ['display_name' => 'Joke of the day'], 
                ['recentdata' => $joke]
            );
        }
    }
}
