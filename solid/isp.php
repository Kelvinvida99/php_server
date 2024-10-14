<?php

// principio de interfaces de segregacion

interface CrudBaseInterface {
    public function add();
    public function get();
}

interface UpdateCrudInterface {
    public function update();
}

interface DeleteCrudInterface {
    public function delete();
}

interface GeneralCrudInterface extends CrudBaseInterface, UpdateCrudInterface, DeleteCrudInterface {

}

class UserCrud implements GeneralCrudInterface {
    public function add(){
        echo "Se ha creado el usuario";
    }

    public function get(){
        echo "Se ha obtenido el usuario";
    }

    public function update(){
        echo "Se ha actualizado el usuario";
    }

    public function delete(){
        echo "Se ha eliminado el usuario";
    }
}

class SalesCrud implements CrudBaseInterface, DeleteCrudInterface {
    public function add(){
        echo "Se ha creado la factura";
    }

    public function get(){
        echo "Se ha obtenido la factura";
    }

    public function delete(){
        echo "Se ha eliminado la factura";
    }
}

function update(UpdateCrudInterface $crud){
    $crud->update();
}

function delete(DeleteCrudInterface $crud){
    $crud->delete();
}

$userCrud = new UserCrud();
update($userCrud);
delete($userCrud);