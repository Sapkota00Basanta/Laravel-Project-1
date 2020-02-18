<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Larademo\Larademo;
class LarademoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('larademo',function()
        {
            return new Larademo();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
