<?php

namespace App\controllers;

use App\abstract\PaymentContract;

class Payment
{
    public function pay(PaymentContract $method)
    {
        $method->payVia();
    }
}