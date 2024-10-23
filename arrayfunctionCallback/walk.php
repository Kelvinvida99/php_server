<?php

require "modelsArray/functions.php";

$numbers = [1, 2, 3, 4, 5];

array_walk($numbers, fn (&$num) => $num *= 2);
show($numbers);

array_walk($numbers, function($num){
    echo $num."<br>";
});
