<?php

namespace Myciplnew\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Myciplnew\Timezones\TimezonesController');
    }
}
