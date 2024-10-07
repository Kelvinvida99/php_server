<?php

$names = [
    "juan",
    "pedro",
    "jose",
    "carlos",
];

$lastName = [
    "vidal",
    "encarnacion",
    "puente",
    "Martinez",
];



if(in_array("juan", $names)){
    echo "existe";
}

array_push($names, "kelvin");
array_pop($names);

$result = array_merge($names, $lastName);

print_r($result);
