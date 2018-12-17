<?php

namespace Pc\Custom;

use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
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
        $this->app->make('Pc\Custom\CustomController');
    }
}
