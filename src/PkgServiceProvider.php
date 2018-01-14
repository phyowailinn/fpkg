<?php

namespace fiberno\Firstpkg;

use Illuminate\Support\ServiceProvider;

class PkgServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->app->singleton(Pkg::class, function ($app) { 
            ['token' => $token, 'end_point' => $endPoint] = $app['config']->get('pkg');
            return new Pkg($token, $endPoint);
        });

        $this->publishes([
            __DIR__.'/config/pkg.php' => config_path('pkg.php'),
        ], 'config');       
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/pkg.php', 'pkg'
        );
    }
}