<?php

class BankAccount
{
    private $balance = 0;
    private $accountHolderName;

    function __construct($name, $initialDeposit)
    {
        $this->accountHolderName = $name;
        $this->balance += $initialDeposit;
    }

    // getter
    public function checkBalance()
    {
        return $this->accountHolderName . " has " . $this->balance . " USD.";
    }
    
    // setter
    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
        return $this;
    }

    // // getter
    // public function getBalance() {
    //     return $this->balance;
    // }
    // // setter
    // public function setBalance($amount)
    // {
    //     $this->balance += $amount;
    //     return $this;
    // }
}
