<?php
namespace App\services;

use App\abstract\PaymentContract;

class PayViaBkash implements PaymentContract
{
    public function payVia()
    {
        echo "paying via Bkash";
    }
}