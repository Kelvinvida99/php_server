<?php

$arr = [1, 2, 3, 4, 5];

function mul(array $arr, callable $func){
    $newArr = [];
    foreach($arr as $item){
        $newArr[] = $func($item);
    }
    return $newArr;
}

$newMult = mul($arr, fn($item) => $item * 2);
print_r($newMult); 