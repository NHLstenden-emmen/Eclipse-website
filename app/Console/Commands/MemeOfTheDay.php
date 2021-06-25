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
        $response = Http::accept('application/json')->get('https://meme-api.herokuapp.com/gimme/wholesomememes');

        $response = $response->json();
        $bottom_text = $response['title'];
        $image = $response['url'];
        $top_text = 'hoi';
        Widgets::query()->updateOrCreate(
            ['type' => 'meme_of_the_day', 'display_name' => 'meme of the day'], 
            ['recentdata' => "bottom_text: ".$bottom_text."; image: ".$image."; top_text: ".$top_text.";"]
        );
    }
}
//https://github.com/D3vd/Meme_Api