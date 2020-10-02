<?php

namespace App\Providers;

use App\Http\Facade\FaceBookOperator;
use Illuminate\Support\ServiceProvider;

class CustomFacadesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('facadeFacebook', function() {
            return new FaceBookOperator();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
