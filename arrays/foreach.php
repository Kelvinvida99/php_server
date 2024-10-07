<?php

$names = ["juan", "pedro", "kelvin"];
$beer = [
    "name" => "Erdirger",
    "alcohol" => "8.5",
    "country" => "alemania",
];


foreach($names as $name){
    echo $name;
}

foreach($beer as $k => $v){
    echo $k ." " .$v ." ";
}