<?php

namespace ProgramZheng\ScormCloudLaravel;

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
        $this->app->make(ScormCloud::class);
        $this->publishes([
            __DIR__.'config/scormcloud.php' => config_path('scormcloud.php'),
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
