<?php
namespace App\Billing;
use Illuminate\Support\Str;
class paymentBankingGateway implements paymentGateway{
    private $currency;
    private $discount;
    public function  __construct($currency){
        $this->currency=$currency;
    }
    public function setDiscount($discount)
    {
        $this->discount=$discount;
    }
    public function charge($amount) {
        return [
            'amount'=>$amount,
            'confirm_number'=>Str::random(40),
            'currency'=>$this->currency,
            'discount'=>$this->discount,
        ];
    }
}