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
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes/web.php';
    }
}
