<?php

$const = 5;

$add = fn(float $a, float $b): float => $a + $b;

$sub = function (float $a, float $b) use($const): float {
    return $a - $b + $const;
};

function show(callable $func, float $a, float $b){
    return $func($a, $b);
};

echo show($sub, 1, 2);