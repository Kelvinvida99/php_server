<?php

$beer = new stdClass();

$beer->name = "Presidente";
$beer->alcohol = 8.8;

$beer->name = "Corona";

//echo $beer->name;

$arr = (array) $beer;

//echo $arr["name"];

$arrLocation = [
    "address" => "Calle 123",
    "country" => "RD",
];

$objLocation = (object) $arrLocation;

echo $objLocation->address;