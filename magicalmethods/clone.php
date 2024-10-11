<?php

class Some{
    public string $name;

    public function __clone(){
        $this->name = strtoupper($this->name);
    }
}

$some = new Some();
$some->name = "primero <br>";

$newSome = clone $some;
$newSome->name = "segundo <br>";

echo $some->name;
echo $newSome->name;