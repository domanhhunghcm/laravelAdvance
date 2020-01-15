<?php

namespace App\Providers;
use App\Billing\paymentBankingGateway;
use App\Billing\paymentCreditGateway;
use App\Billing\paymentGateway;
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
        //
    }
}
