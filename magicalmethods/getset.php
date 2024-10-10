<?php

$person = new Person();
$person->name = "Kelvin";
//echo $person->country = "RD";
echo $person->address = "calle 123";

class Person{
    public int $id;
    public string $name;
    public array $data = [];


    public function __get($name) {
        //echo "No existe $name en el objeto";
        return $this->data[$name];
    }

    public function __set($name, $value) {
        //echo "No tenemos $name para asignar $value";
        $this->data[$name] = $value;
    }
}