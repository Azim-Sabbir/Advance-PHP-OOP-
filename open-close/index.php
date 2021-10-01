<?php
require __DIR__ . "/vendor/autoload.php";

use App\controllers\Payment;
use App\services\PayViaBkash;

$paymentController = new Payment();
$bkash = new PayViaBkash();
echo $paymentController->pay($bkash);