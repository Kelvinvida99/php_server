<?php

function pipe(...$funcs){
    return function ($value) use ($funcs) {
        foreach($funcs as $func){
            $value = $func($value);
        }

        return $value;
    };
}

$toUpper = fn($value) => strtoupper($value);
$repleaceSpace = fn($value) => str_replace(" ", "", $value);
$replaceNumber = fn($value) => preg_replace("/\d+/u", "", $value);

$pipe = pipe($toUpper, $repleaceSpace, $replaceNumber);
$result = $pipe("hola 123");
echo $result;