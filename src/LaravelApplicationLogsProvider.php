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
        $laravel = app();
		$version = $laravel::VERSION;
		
		if($version >= '5.4.*'){
			Schema::defaultStringLength(191);
			
		}else if($version >= '5.3.*'){
			$this->loadMigrationsFrom(__DIR__.'/migrations');
		}else{
			 $this->publishes([
				__DIR__.'/migrations/' => database_path('migrations')
			], 'migrations');
		}
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
