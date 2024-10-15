<?php

function add(float $a, float $b): float {
    return $a + $b;
}

function addMemo() {
    $memo = [];

    return function($a, $b) use(&$memo){
        $index = $a."-".$b;

        if(isset($memo[$index])){
            echo "se ha calculado anteriormente";
            return $memo[$index];
        }

        $result = add($a, $b);
        $memo[$index] = $a + $b;
        return $result;
    };
}

$newMemo = addMemo();
echo $newMemo(1, 2)."<br>";
echo $newMemo(1, 2)."<br>";