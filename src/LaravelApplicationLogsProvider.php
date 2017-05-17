<?php

namespace Manishyadav\LaravelApplicationLogs;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Application;

class LaravelApplicationLogsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->configureMonologUsing(function (\Monolog\Logger $monolog) {
            return (new ConfigureMonolog())->getLogger($monolog);
        });

    }
}
