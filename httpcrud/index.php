<?php

require_once __DIR__ . "/validators/autoload.php";

use app\exception\DataException;
use app\exception\ValidationException;

try{

    switch($_SERVER['REQUEST_METHOD']){
        case "GET":
            break;
        case "POST":
            break;
        case "PUT":
            break;
        case "DELETE":
            break;
        default:
            http_response_code(405);
            echo json_encode(['error' => 'no se ha recibido un pedido GET']);
    }

}catch(ValidationException $e){
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}catch(DataException $e){
    http_response_code(404);
    echo json_encode(['error' => $e->getMessage()]);
}catch(\Exception $e){
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}