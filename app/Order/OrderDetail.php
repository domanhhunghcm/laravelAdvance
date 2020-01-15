<?php
namespace App\Order;
use App\Billing\paymentBankingGateway;
use App\Billing\paymentGateway;
class OrderDetail {
    private $paymentBankingGateway;
    public function __construct(paymentGateway $paymentGateway)
    {
        $this->paymentGateway=$paymentGateway;
    }
    public function all()
    {
        $this->paymentGateway->setDiscount(500);
    }
}