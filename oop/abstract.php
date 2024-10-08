<?php

$beer = new Beer("Presidente", 100);
echo $beer->getName();
function showInfo(Product $product) {
    echo $product->calculatePrice();
}

showInfo($beer);

abstract class Product {
    protected float $total;
    protected string $name;

    abstract public function calculatePrice(): float;

    public function getName(){
        return $this->name;
    }
}

class Beer extends Product{
    const TAX = 1.18;

    public function __construct(string $name, float $total) {
        $this->name = $name;
        $this->total = $total;
    }

    public function calculatePrice(): float {
        return $this->total * self::TAX;
    }
}