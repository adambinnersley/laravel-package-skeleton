<?php

namespace VendorName\MyPackageName;

use Illuminate\Support\ServiceProvider;
use VendorName\MyPackageName\Console\Commands\ExampleDoSomething;

class PackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/example.php',
            'example'
        );
        $this->app->bind('helpers', function ($app) {
            return new Helpers();
        });
        
        if ($this->app->runningInConsole()) {
            $this->commands([
                ExampleDoSomething::class,
            ]);
        }
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'example');

        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/example'),
        ], 'public');
    }
}
