<?php

namespace ProgramZheng\LaravelTranslationTxt;

use Illuminate\Support\ServiceProvider;

class ScormCloudLaravelProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            dirname(__DIR__).'/config/scormcloud.php' => config_path('scormcloud.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
