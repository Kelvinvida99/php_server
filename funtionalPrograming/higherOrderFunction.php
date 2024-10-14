<?php

$add = function(float $a, float $b){
    return $a + $b;
};

function op(callable $func, float $a, float $b){
    return $func($a, $b);
}

function mul(float $a, float $b){
    return $a * $b;
}

echo op("mul", 1, 2);

