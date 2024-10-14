<?php

$sum = function(float $num){
    return function(float $num2) use($num){
        return $num + $num2;
    };
};

// echo $sum(1)(2);

$s1 = $sum(1);
echo $s1(2);