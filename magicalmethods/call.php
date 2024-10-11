<?php 

$engine = new Engine("logger");
$engine->log("error 404");
//$engine->run("correr", "beber");
//Engine::some('hola', 'mundo');

class Engine {
    private string $fileName;

    public function __construct($fileName) {
        $this->fileName = $fileName; 
    }

    public function __call($message, $args) {
        //echo "Llamando al metodo '$name' "
        //    ."con los argumentos: ". implode(", ", $args)
        //        ." no existe.";

        $message = $message." ";
        $message .= $args[0]." - ";
        $message .= date("Y-m-d H:i:s")."\n";

        if(!file_exists($this->fileName)){
            file_put_contents($this->fileName, "");
        }

        file_put_contents($this->fileName, $message, FILE_APPEND);
    }

    public static function __callStatic($name, $args)
    {
        echo "Llamando al metodo '$name' "
            ."con los argumentos: ". implode(", ", $args)
                ." no existe.";
    }
}