<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people1 = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Maria", 15)
];

$people2 = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Carlos", 15)
];

//echo ("Juan" <=> "Pedro");
//echo ("Juan" <=> "Juan");
//echo ("Pedro" <=> "Juan");

$diferences = array_udiff(
    $people1,
    $people2,
    fn($person1, $person2)
    => $person1 <=> $person2
);

show($diferences);


$diferences = array_udiff(
    $people2,
    $people1,
    fn($person1, $person2)
    => $person1 <=> $person2
);

show($diferences);