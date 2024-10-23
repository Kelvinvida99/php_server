<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Maria", 15)
];

//echo (1 <=> 2)."<br>";
//echo (1 <=> 1)."<br>";
//echo (2 <=> 1)."<br>";

usort($people,
    fn($person1, $person2) 
    => $person1->age <=> $person2->age
);

show($people);

usort($people,
    fn($person1, $person2) 
    => $person2->age <=> $person1->age
);

show($people);