<?php

namespace Kdg\Transform;

use Illuminate\Support\ServiceProvider;

class TransformProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("transform", function () {
            return new Transform;
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
