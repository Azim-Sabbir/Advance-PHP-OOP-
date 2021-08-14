<?php

class BankAccount
{
//properties name,acc_no,branch,pin,balance
//behaviour deposit withdraw balance_check,change_pin
    private $name, $account_no, $branch, $pin, $balance;
    const TYPE = "student";
    private static $bankName = "DBBL";

    /**
     * @param int $amount
     * @return void
     */
    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }

    public function balanceCheck()
    {
        return $this->balance;
    }

    public function pinChange($newPin)
    {
        $this->pin = $newPin;
    }

    public function cType()
    {
        return self::TYPE;
    }

    public static function bankName()
    {
        return self::$bankName;
    }

}

$bankAccount = new BankAccount();
$bankAccount->deposit(200);
//we can either invoke a static function by creating object or using :: after classname
//echo $bankAccount->bankName();
echo  BankAccount::bankName();