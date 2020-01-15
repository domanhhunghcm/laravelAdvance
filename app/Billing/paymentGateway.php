<?php
namespace App\Billing;
interface paymentGateway{
    public function setDiscount($discount);
    public function charge($amount);
}