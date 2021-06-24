<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    { 
        $schedule->command('jokeOfTheDay:api')->daily()->withoutOverlapping();
        $schedule->command('memeOfTheDay:api')->daily()->withoutOverlapping();
        
        $schedule->command('catFacts:api')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('TopNews:api')->everyFifteenMinutes()->withoutOverlapping();

        $schedule->command('categoryNews:api business')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api entertainment')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api general')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api health')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api science')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api sports')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api technology')->everyFifteenMinutes()->withoutOverlapping();
        
        $schedule->command('spesificWeather:api 2756136')->everyFifteenMinutes()->withoutOverlapping();
        $schedule->command('spesificWeather:api 2755251')->everyFifteenMinutes()->withoutOverlapping();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
