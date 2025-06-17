<?php
namespace Tests;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        // The following is correct: you must use require to load the app bootstrap file.
        /** @SuppressWarnings("php:S4833") */
        $app = require_once __DIR__.'/../bootstrap/app.php'; // NOSONAR

        $app->make(Kernel::class)->bootstrap();
        return $app;
    }
}

