<?php

namespace App\Providers;
use App\Billing\paymentBankingGateway;
use App\Billing\paymentCreditGateway;
use App\Billing\paymentGateway;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Channel;
use App\Http\View\Composers\ChannelComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(paymentGateway::class, function () {
            if(request()->has('credit')){
                return new paymentCreditGateway('credit');
            }
            return new paymentBankingGateway('usd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        // view()->share('channel', Channel::get());
        // View::composer(['channel.channel','post.post'], function ($view) {
        //     $view->with('channel',Channel::orderBy('name','desc')->get());
        // });
        // Using class based composers...
        View::composer(
            '*', 'App\Http\View\Composers\ChannelComposer'
        );
    }
}
