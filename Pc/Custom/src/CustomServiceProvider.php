<?php

namespace Pc\Custom;

use Illuminate\Support\ServiceProvider;
use Pc\Custom\Commands\CreateCustom;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateCustom::class,
            ]);
        }
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pc');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }
}
