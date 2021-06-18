<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class MemeOfTheDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'memeOfTheDay:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'api for the daily memes';

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
        $response = Http::accept('application/json')->get('http://alpha-meme-maker.herokuapp.com');

        $response = $response->json();
        if($response['code'] === 200){
            $bottom_text = $response['data'][0]['bottomText'];
            $image = $response['data'][0]['image'];
            $top_text = $response['data'][0]['topText'];
            Widgets::query()->updateOrCreate(
                ['type' => 'meme_of_the_day', 'display_name' => 'meme of the day'], 
                ['recentdata' => "bottom_text: ".$bottom_text."; image: ".$image."; top_text: ".$top_text.";"]
            );
        }
    }
}
