<?php

namespace Mahmoud\Woocommerge;

use Illuminate\Support\ServiceProvider;

class WoocommergeServiceProvider extends ServiceProvider
{

    public function register()
    {
    }

    public function boot()
    {

        // Load my package routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // Views
        $this->loadViewsFrom(__DIR__ . '/views', 'woocommerge');

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // Config file
        $this->mergeConfigFrom(__DIR__ . '/config/woocommerge.php', 'woocommerge');

        // Also I can publish it for end developer if needed
        $this->publishes([
            __DIR__ . '/config/woocommerge.php' => config_path('woocommerge.php')
        ]);
    }
}
