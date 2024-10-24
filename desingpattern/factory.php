<?php

interface BeerInterface {
    public function getPrice(): float;
}

class Lager implements BeerInterface {
    private float $tax;
    private float $price;

    public function __construct(float $price, float $tax) 
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function getPrice(): float {
        return $this->price + $this->tax;
    }
}

class IPA implements BeerInterface {
    private float $price;
    private float $discount;

    public function __construct(float $price, float $discount) 
    {
        $this->price = $price;
        $this->discount =$discount;
    }

    public function getPrice(): float {
        return $this->price - $this->discount;
    }
}

abstract class BeerFactory {
    abstract public function create(array $params): BeerInterface;
}

class LagerFactory extends BeerFactory {
    public function create(array $params): BeerInterface
    {
        return new Lager($params["price"], $params["tax"]);
    }
}

class IPAFactory extends BeerFactory {
    public function create(array $params): BeerInterface
    {
        return new IPA($params["price"], $params["discount"]);
    }
}

$ipaFactory = new IPAFactory();
$ipa = $ipaFactory->create(["price" => 10, "discount" => 2]);
echo "$ " .$ipa->getPrice();