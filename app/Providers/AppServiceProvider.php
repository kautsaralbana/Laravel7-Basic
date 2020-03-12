<?php

namespace App\Providers;

use Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        Blade::component('components.a-button', 'a-button');
        Blade::component('components.alert', 'alert');
        Blade::component('components.bc-item-off', 'bcItemOff');
        Blade::component('components.bc-item-on', 'bcItemOn');
        Blade::component('components.breadcrumb', 'breadcrumb');
        Blade::component('components.button', 'button');
        Blade::component('components.card', 'card');
        Blade::component('components.half-card', 'halfCard');
        Blade::component('components.error', 'error');
        Blade::component('components.modal-btn', 'modalBtn');
        Blade::component('components.modal', 'modal');
    }
}
