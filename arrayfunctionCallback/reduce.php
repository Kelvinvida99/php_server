<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Maria", 15)
];

$sum = array_reduce($people, fn($current, $person) => $current + $person->age, 0);
//echo $sum;

$namePipe = array_reduce($people, fn($current, $person) => $current . $person->name . "|", "");
echo $namePipe;

$contentHtml = array_reduce($people, 
    fn($current, $person) => $current . "<li>". $person->name ."</li>", "<ul>"
);

$contentHtml .= "</ul>";

echo $contentHtml;