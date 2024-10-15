<?php

function compose($fn1, $fn2){
    return function ($value) use ($fn1, $fn2) {
        return $fn2($fn1($value));
    };
}

$add = fn(float $num) => $num + 10;
$mul = fn(float $num) => $num * 2;

$addAndMul = compose($add, $mul);

echo $addAndMul(10);