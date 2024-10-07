<?php

$beers = [
    [
        "name" => "Erdirger",
        "alcohol" => "8.5",
        "country" => "alemania",
    ],
    [
        "name" => "Erdirger 2",
        "alcohol" => "9",
        "country" => "alemania",
    ]
];

// echo $beers[0]["name"];

foreach($beers as $beer){
    foreach($beer as $v){
        echo $v ."<br>";
    }
}