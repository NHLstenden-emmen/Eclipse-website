<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class GeekJokesApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geekJokes:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'jokes for for geeks';

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
        $response = Http::get('https://geek-jokes.sameerkumar.website/api');
        
        Widgets::query()->updateOrCreate(
            ['type' => 'geek_jokes'],
            ['display_name' => 'geek jokes'], 
            ['recentdata' => $response]);
    }
}
