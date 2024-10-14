<?php

// funcion recursiva

function show($n) {
    if($n < 1) return;

    echo $n."\n";

    show($n - 1);
}

show(10);