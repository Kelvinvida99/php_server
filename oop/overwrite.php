<?php

class Discount {
    protected $discount = 0;

    public function __construct(float $discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount($price){
        echo "se aplica descuento<br>";
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount {
    const SPECIAL_DISCOUNT = 2;

    public function getDiscount($price) {
        echo "se aplica descuento especial<br>";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}

$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->getDiscount(100);
echo $discountAmount;