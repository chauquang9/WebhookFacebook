<?php

namespace App\Providers;

use App\Http\Chatbot\Alexa;
use App\Http\Chatbot\InterfaceBot;
use App\Http\Chatbot\Simsimi;
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
        $this->app->bind(InterfaceBot::class, Simsimi::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
