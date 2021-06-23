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
        
        $schedule->command('catFacts:api')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('TopNews:api')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('geekJokes:api')->everyFiveMinutes()->withoutOverlapping();

        $schedule->command('categoryNews:api business')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api entertainment')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api general')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api health')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api science')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api sports')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('categoryNews:api technology')->everyThirtyMinutes()->withoutOverlapping();
        
        $schedule->command('spesificWeather:api 2756136')->everyThirtyMinutes()->withoutOverlapping();
        $schedule->command('spesificWeather:api 2755251')->everyThirtyMinutes()->withoutOverlapping();
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
