<?php

interface SendInterface {
    public function send(string $message);
}

interface SaveInterface {
    public function save();
}

class Document implements SendInterface, SaveInterface {
    public function send(string $message){
        echo "mensaje del cliente ".$message;
    }
    public function save(){
        echo "guardado";
    }
}

class BeerRepository implements SaveInterface{
    public function save(){
        echo "guardado en db";
    }
}

class SaveProcess {
    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager) {
        $this->saveManager = $saveManager;
    }

    public function keep() {
        echo "codigo execute";
        $this->saveManager;
    }
}

$newDocument = new Document();

$process = new SaveProcess($newDocument);