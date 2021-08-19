<?php

interface SendingMethodContract
{
    public function sendingMethod();
}

class ViaBKASH implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via bkash";
    }
}

class ViaRocket implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via rocket";
    }
}

class ViaNagad implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via nagad";
    }
}

class SendTaka
{
    public function send(SendingMethodContract $sendingMethod, $amount)
    {
        echo "sending taka {$amount}";
        echo PHP_EOL;
//        $sendingMethod= new ViaBKASH();
        $sendingMethod->sendingMethod();
    }
}

class SendDollar
{
    public function send(SendingMethodContract $sendingMethod, $amount)
    {
        echo "sending dollar {$amount}";
        echo PHP_EOL;
//        $sendingMethod= new ViaBKASH();
        $sendingMethod->sendingMethod();
    }
}

(new sendTaka())->send(new ViaBKASH(), 100);
echo PHP_EOL;
(new sendDollar())->send(new ViaNagad(), 500);