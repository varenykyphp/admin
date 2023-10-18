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
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'varenykyAdmin');
        $this->loadRoutesFrom(__DIR__ . '/../routes/resources.php');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'varenykyAdmin');

        $this->publishes([
            __DIR__ . '/../config/admin.php' => config_path('varenyky-admin.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../public/css/app.css' => public_path('css/admin.css'),
            __DIR__ . '/../public/css/auth.css' => public_path('css/auth.css'),
        ]);
        $this->publishes([
            __DIR__ . '/../public/js/app.js' => public_path('js/admin.js'),
        ]);
        $this->publishes([
            __DIR__ . '/../public/fonts/vendor/@fortawesome/fontawesome-free/webfa-brands-400.ttf' => public_path('fonts/vendor/@fortawesome/fontawesome-free/webfa-brands-400.ttf'),
            __DIR__ . '/../public/fonts/vendor/@fortawesome/fontawesome-free/webfa-brands-400.woff2' => public_path('fonts/vendor/@fortawesome/fontawesome-free/webfa-brands-400.woff2'),
            __DIR__ . '/../public/fonts/vendor/@fortawesome/fontawesome-free/webfa-solid-900.ttf' => public_path('fonts/vendor/@fortawesome/fontawesome-free/webfa-solid-900.ttf'),
            __DIR__ . '/../public/fonts/vendor/@fortawesome/fontawesome-free/webfa-solid-900.woff2' => public_path('fonts/vendor/@fortawesome/fontawesome-free/webfa-solid-900.woff2'),
        ]);
    }
}
