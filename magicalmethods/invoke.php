<?php

class Add {
    public function __invoke($a, $b){
        return $a + $b;
    }
}

class Validator{
    private int $min;
    private int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    public function __invoke($text)
    {
        $long = strlen($text);

        if ($long < $this->min || $long > $this->max){
            return false;
        }

        return true;
    }
}

//$add = new Add();
//echo $add(4, 4);

$validator = new Validator(1, 20);
if($validator("sjflajfdjaafdfasfsfsfsfs")){
    echo "texto valido";
} else {
    echo "texto invalido";
}