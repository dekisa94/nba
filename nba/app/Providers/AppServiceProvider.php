<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use App\Team;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.master', function($view)
        {
        $view->with('teams', Team::get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
