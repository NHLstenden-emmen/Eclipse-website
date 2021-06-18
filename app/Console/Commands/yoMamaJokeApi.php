<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class yoMamaJokeApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yoMamaJoke:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'yo mama jokes';

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
        $response = Http::get('https://api.yomomma.info/');
        
        $response = $response->json();
        $joke = $response['joke'];
        Widgets::query()->updateOrCreate(
            ['type' => 'yo_mama_jokes', 'display_name' => 'yo mama joke'], 
            ['recentdata' => $joke]);
    }
}
