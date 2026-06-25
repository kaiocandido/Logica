<?php

class SpaceAge
{
    private int $seconds;
    public function __construct(int $seconds)
    {
        $this->seconds = $seconds;    
    }

    public function calc(){
       return $idade_terra = $this->seconds / 31_557_600;
    }


    public function earth(): float
    {
        $idade_planeta = $this->calc() / 1.0;
        return  $idade_planeta;
    }

    public function mercury(): float
    {
        $idade_planeta = $this->calc() / 0.2408467;
        return  $idade_planeta;
        
    }

    public function venus(): float
    {
        $idade_planeta = $this->calc() / 0.61519726;
        return  $idade_planeta;  
    }

    public function mars(): float
    {
        $idade_planeta = $this->calc() / 1.8808158;
        return  $idade_planeta;  
    }

    public function jupiter(): float
    {
        $idade_planeta = $this->calc() / 11.862615;
        return  $idade_planeta;
    }

    public function saturn(): float
    {
        $idade_planeta = $this->calc() / 29.447498;
        return  $idade_planeta;
    }

    public function uranus(): float
    {
        $idade_planeta = $this->calc() / 84.016846;
        return  $idade_planeta;
    }

    public function neptune(): float
    {
        $idade_planeta = $this->calc() / 164.79132;
        return  $idade_planeta;
    }
}
