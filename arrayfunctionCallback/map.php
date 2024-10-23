<?php

require "modelsArray/people.php";
require "modelsArray/functions.php";

use ModelsArray\People;

$people = [
    new People("Juan", 30),
    new People("Pedro", 26),
    new People("Maria", 15)
];

$name = array_map(fn($person) => $person->name, $people);
show($name);
//show($people);

$namesWithFormat = array_map(fn ($person) => "<b style='color: red'>" . $person->name . "</b>", $people);
show($namesWithFormat);

$namesWithNumber = array_map(fn ($person, $index) => $index . " - " . $person->name, $people, array_keys($people));
show($namesWithNumber);

$namesWithNumber = array_map(fn ($person, $index) => $index . " - " . $person->name, $people, array_keys($people));
show($namesWithNumber);

$namesWithNumber2 = array_map(fn ($person, $index) => ["id" => ($index + 1), "name" => ($person->name)], $people, array_keys($people));
show($namesWithNumber2);