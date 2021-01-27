<?php

namespace App\Services\Localization;

use Session;


use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        session(['locale' => ""]);
    }

    public function register()
    {
        $this->app->bind("Localization", 'App\Services\Localization\Localization');
    }
}
