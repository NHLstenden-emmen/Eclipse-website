<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class NewsApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'NewsApi:Update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the weather api data';

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
        
        $apiKey = env('NEWS_API_KEY');

        $response = Http::get('https://newsapi.org/v2/top-headlines', [
            'apiKey' => $apiKey,
            'sources' => 'bbc-news'
        ]);
        
        Widgets::query()->updateOrCreate(['type' => 'news'], ['recentdata' => $response]);
    }
}
