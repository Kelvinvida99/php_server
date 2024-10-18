<?php

namespace app\validators;

use app\interfaces\ValidatorInterface;

class Validator implements ValidatorInterface {
    private string $errors;

    public function __construct()
    {
        $this->errors = "";
    }

    public function getErrors(): string {
        return $this->errors;
    }

    public function validateAdd($data): bool
    {
        if(empty($data['name'])){
            $this->errors .= "El campo name no puede estar vacio<br>";
            return false;
        }

        return true;
    }

    public function validateUpdate($data): bool
    {   
        if(empty($data['id'])){
            $this->errors .= "El campo id no puede estar vacio<br>";
            return false;
        }

        if(empty($data['name'])){
            $this->errors .= "El campo name no puede estar vacio<br>";
            return false;
        }

        return true;
    }
}