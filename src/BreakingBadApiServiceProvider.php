<?php

namespace kwaight\BreakingBadApiService;

use Illuminate\Support\ServiceProvider;

class BreakingBadApiServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/breaking_bad_api.php' => config_path('breaking_bad_api.php'),
        ], 'breaking-bad-api-config');
    }

    /**
     * Make config publish optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/breaking_bad_api.php',
            'breaking_bad_api'
        );
    }
}