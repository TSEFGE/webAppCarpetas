<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Add this custom validation rule.
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            // This will only accept alpha and spaces. 
            // If you want to accept hyphens use: /^[\pL\s-]+$/u.
            return preg_match('/^[\pL\s]+$/u', $value); 

        });

        Validator::extend('nombre', function ($attribute, $value) {
            return preg_match('/^([A-ZÑÁÉÍÓÚ]+[\s]*)+$/', $value); 

        });

        Validator::extend('alias', function ($attribute, $value) {
            return preg_match('/^([A-ZÁÉÍÓÚ0-9]+[\s]*)+$/', $value); 

        });

        Validator::extend('rfc', function ($attribute, $value) {
            return preg_match('/^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$/', $value); 

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
