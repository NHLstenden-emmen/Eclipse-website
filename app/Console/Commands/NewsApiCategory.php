<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class NewsApiCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categoryNews:api {category}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update specific news news data';

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
            'category' => $this->argument('category'),
            'language' => 'en'
        ]);
        
        $response = $response->json();
        if($response['status'] === "ok"){
            $title1 = $response['articles'][0]['title'];
            $title2 = $response['articles'][1]['title'];
            $title3 = $response['articles'][2]['title'];
            $title4 = $response['articles'][3]['title'];
            $title5 = $response['articles'][4]['title'];
        
            Widgets::query()->updateOrCreate(
            ['type' => 'news_'.$this->argument('category'), 'display_name' => $this->argument('category').' news'], 
            
            ['recentdata' => "
            Title 1: ".$title1.";
            Title 2: ".$title2.";
            Title 3: ".$title3.";
            Title 4: ".$title4.";
            Title 5: ".$title5
            ]);
        }
    }
}
