<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\paymentBankingGateway;
use App\Billing\paymentGateway;
use App\Order\OrderDetail;

class payOrderController extends Controller
{
    public function store(OrderDetail $orderDetail,paymentGateway $paymentGateway)
    {
        $orderDetail->all();
        dd($paymentGateway->charge(2500));
    }
}
