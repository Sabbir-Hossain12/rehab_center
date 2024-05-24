<?php

namespace App\Providers;

use App\Models\Basic;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view)
        {
            $basic = Basic::first();
            $view->with('basic', $basic);
        });

    }
}
