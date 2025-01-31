<?php

namespace Errehub\LaravelAlert;

use Errehub\LaravelAlert\Alert;
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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'alert');

        // Publish package assets (Css Ans JS)
        $this->publishes([
            __DIR__ . '/../resources/assets/js' => public_path('vendor/errehub/laravel-alert/js'),
            __DIR__ . '/../resources/assets/css' => public_path('vendor/errehub/laravel-alert/css'),
        ], 'public');

        // Publish package views (alerts)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/errehub/laravel-alert'),
        ], 'views');
    }
}
