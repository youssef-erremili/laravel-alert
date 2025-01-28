<?php

namespace Errehub\LaravelAlert;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register Alert class as a singleton
        $this->app->singleton('alert', function () {
            return new Alert();
        });
    }

    public function boot()
    {
        // Load views from the package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'alert');

        // Allow publishing of views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/alert'),
        ], 'views');
    }
}
