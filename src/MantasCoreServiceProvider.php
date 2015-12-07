<?php

namespace mantas\core;

use Illuminate\Support\ServiceProvider;

class MantasCoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'core');

        require __DIR__ . '/http/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
