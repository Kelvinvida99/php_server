<?php

trait EmailSender {
    public function sendEmail() {
        echo "Esta funcion envia un email<br>";
    }
}

trait DB {
    public function save() {
        echo "Esta funcion guarda en la base de datos<br>";
    }
}

trait Log {
    protected function log(string $message, string $fileName){
        if(!file_exists($fileName)){
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s")." - ".$message."\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice {
    use EmailSender, DB, Log;

    public function create() {
        echo "se crea una factura";
        $this->log("Se creo la factura", "logs.txt");
    }
}

$newInvoce = new Invoice();
echo $newInvoce->sendEmail();
echo $newInvoce->save();
$newInvoce->create();
