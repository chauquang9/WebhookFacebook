<?php

namespace App\Providers;

use App\Http\Chatbot\BotInterface;
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
        $this->app->bind(BotInterface::class, Simsimi::class);
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
