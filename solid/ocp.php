<?php

// principio abierto / cerrado
// podemos escalar el codigo haciendo modificaciones minimas.

interface OpInterface{
    public function calculate(float $a, float $b): float;
}

class Sum implements OpInterface {
    public function calculate(float $a, float $b): float
    {
        return $a + $b;
    }
}

class Sub implements OpInterface {
    public function calculate(float $a, float $b): float
    {
        return $a - $b;
    }
}

class Mul implements OpInterface {
    public function calculate(float $a, float $b): float
    {
        return $a * $b;
    }
}

class Div implements OpInterface {
    public function calculate(float $a, float $b): float
    {
        return $a / $b;
    }
}

class Calculator {
    private OpInterface $op;

    public function __construct(OpInterface $op)
    {
        $this->op = $op;
    }

    public function calculate(float $a, float $b){
        return $this->op->calculate($a, $b);
    }
}


$sum = new Sum();
$sub = new Sub();
$mul = new Mul();
$div = new Div();

$newCal = new Calculator($div);
echo $newCal->calculate(10, 5);