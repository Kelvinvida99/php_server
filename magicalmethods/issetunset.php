<?php

$a = 1;
unset($a);

if(isset($a)){
    //echo "existe";
} else {
    //echo "no existe";
}

$wine = new Wine();
unset($wine->category);
if(isset($wine->category)){
    echo "existe";
} else {
    echo "no existe";
}

class Wine{
    //public string $category = "beer";
    
    public function __isset($name)
    {
        echo "Comprobando existencia de $name <br>";
    }

    public function __unset($name)
    {
        echo "Intentando eliminar $name <br>";
    }
}

