<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TopNavigation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $topNavigation = TopNavigation::all();
        view()->share('topNavigation', $topNavigation);
    }
}
