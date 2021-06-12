<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Widgets;

class CatFactsAPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'RandomCat:facts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a fun cat fact';

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
        $maxlenght = '140';

        $response = Http::get('https://catfact.ninja/fact?', [
            'max_length' => $maxlenght
        ]);
        
        $fact = $response['fact'];

        Widgets::query()->updateOrCreate(['type' => 'CatFact'], ['recentdata' => $fact]);
        
        return 0;
    }
}
