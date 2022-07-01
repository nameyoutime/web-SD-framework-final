<?php

namespace App\Providers;

use App\View\Components\Alert;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Blade::component('package-alert', Alert::class);
        Schema::defaultStringLength(191);//Bổ sung dòng này
        //
    }
}
