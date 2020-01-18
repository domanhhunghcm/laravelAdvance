<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\ChannelComposer;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'channel', 'App\Http\View\Composers\ChannelComposer'
        );

        // Using Closure based composers...
        View::composer('*', function ($view) {
            //
        });
    }
}
