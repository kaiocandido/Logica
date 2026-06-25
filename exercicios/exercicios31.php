<?php

class BankAccount
{
    public $saldoFinal = 0;
    private $isOpen = false;

    public function open()
    {   
        if ($this->isOpen == true){
            throw new Exception("account already open");
        }

        $this->isOpen = true;
        $this->saldoFinal = 0; 
    }

    public function close()
    {
        if ($this->isOpen == false){
            throw new Exception("account not open");
        }

        $this->isOpen = false;
    }

    public function balance(): int
    {
        if($this->isOpen == true){
            return $this->saldoFinal;
        }

        throw new Exception("account not open");
    }

    public function deposit(int $amt)
    {
        if($this->isOpen == false){
            throw new Exception("account not open");
        } 
        
        if($amt <= 0 ){
            throw new InvalidArgumentException("amount must be greater than 0");
        }

        $this->saldoFinal += $amt;
    }

    public function withdraw(int $amt)
    {
        if($this->isOpen == false){
            throw new ErrorException("account not open");
        }

        if ($amt > $this->saldoFinal){
            throw new InvalidArgumentException("amount must be less than balance");
        }

        if($amt <= 0 ){
            throw new InvalidArgumentException("amount must be greater than 0");
        }

        $this->saldoFinal -= $amt;
    }
}