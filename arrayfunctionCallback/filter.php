<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Maria", 15)
];

$greater = array_filter($people, fn ($person) => $person->age > 20);
show($greater);

$withoutPedro = array_filter($people, fn ($person) => $person->name != "Pedro");
show($withoutPedro);