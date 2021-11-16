<?php

namespace Simtabi\Gechemba\Providers;

use Simtabi\Gechemba\Commands\MakeFormCommand;
use Illuminate\Support\ServiceProvider;

class GechembaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeFormCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../../views', 'gechemba');

        $this->publishes([
            __DIR__ . '/../../views' => resource_path('views/vendor/gechemba'),
        ]);
    }
}
