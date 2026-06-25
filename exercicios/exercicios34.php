<?php


class Triangle
{

    public $a;
    public $b;
    public $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function kind(): string
    {   
        $equilatero = "equilateral";
        $isosceles = "isosceles";
        $escaleno = "scalene";

        if (
            $this->a + $this->b <= $this->c || 
            $this->a + $this->c <= $this->b || 
            $this->b + $this->c <= $this->a){
            throw new ErrorException("Não é um triângulo válido");
        }

        if ($this->a == $this->b && $this->b == $this->c){
            return $equilatero;
        }

        if ($this->a == $this->b || $this->b == $this->c || $this->a == $this->c){
            return $isosceles;
        }

        return $escaleno;

    }
}