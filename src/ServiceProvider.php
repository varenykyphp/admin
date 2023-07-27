<?php

namespace VarenykyAdmin;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }   

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'varenykyAdmin');

        $this->publishes([
            __DIR__.'/../config/admin.php' => config_path('varenyky-admin.php'),
        ]);
    }
}