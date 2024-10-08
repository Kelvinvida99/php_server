<?php

$beer = new Beer("Ligth", "Presidente", 5.8, true);
$json = json_encode($beer);
//echo $json;

$jsonBeer = '{
  "name": "Ligth",
  "brand": "Presidente",
  "alcohol": 5.8,
  "isStrong": true
}';

$objBeer = json_decode($jsonBeer);
//print_r($objBeer);

$arr = [
    "name"=>"Kelvin",
    "country"=>"RD",
];

$newJson = json_encode($arr);
//echo $newJson;

$newArr = json_decode($newJson, true);
echo $newArr["name"];

class Beer{
    public string $name;
    public string $brand;
    public float $alcohol;
    public bool $isStrong;

    public function __construct(string $name, string $brand, float $alcohol, bool $isStrong)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->alcohol = $alcohol;
        $this->isStrong = $isStrong;
    }
}