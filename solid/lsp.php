<?php

interface ISendProject{
    public function send();
}

class Project{
    public function create(){
        echo "Se ha creado el proyecto";
    }
}

class SalesProject extends Project implements ISendProject{
    public function send(){
        echo "El email ha sido enviado";
    }
}

class InternalProject extends Project {
    // ... otros metodos
}

function send(ISendProject $project){
    $project->send();
}

send(new SalesProject());