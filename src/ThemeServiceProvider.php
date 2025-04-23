<?php

namespace SaluteOra\Themes\Two;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/theme.php', 'theme-two'
        );
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'theme-two');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/theme.php' => config_path('theme-two.php'),
            ], 'theme-two-config');
        }
    }
}
