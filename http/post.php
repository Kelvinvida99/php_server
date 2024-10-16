<?php

header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD'] == "POST"){
   //echo file_get_contents("php://input");
   $json = file_get_contents("php://input");

   $data = json_decode($json, true);
   //echo $data["name"];

   extract($data);

   http_response_code(201);
   echo json_encode(['name' => $name, 'email' => $email]);

}else{
    http_response_code(404);
    echo json_encode(['error' => 'no se ha recibido un pedido POST']);
}