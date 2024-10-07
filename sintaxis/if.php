<?php

$age = 17;

if($age == 18){
    echo "tienes 18 años";
} else if($age > 18 && $age < 60){
    echo "tienes mas de 18 años";
} else if($age >= 60) {
    echo "eres un viejo";
} else {
    echo "eres menor";
}