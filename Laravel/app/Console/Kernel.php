<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        // Laravel does not support importing regular PHP files via the "use" statement.
        // If you want to import classes, use "use" at the top of the file.
        // For file inclusion (like routes/console.php), continue to use require.
        require base_path('routes/console.php');
    }
}
