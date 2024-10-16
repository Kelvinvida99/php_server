<?php

header("Content-Type: application/json");

$arr = [
    [
        "id" => 1,
        "name" => "Kelvin",
    ],
    [
        "id" => 2,
        "name" => "Pedro",
    ],
];

if($_SERVER['REQUEST_METHOD'] == 'PUT'){
    $json = file_get_contents("php://input");
    $data = json_decode($json);
    extract((array)$data);

   if($data != null && isset($id) && isset($name)){
    $index = get($id, $arr);

    if($index >= 0){
        $arr[$index]["name"] = $name;

        http_response_code(200);
        echo json_encode([
            "message" => "se ha actualizado el dato",
            "data" => json_encode($arr) 
        ]);
    }else {
        http_response_code(404);
        echo json_encode(['error' => 'datos no existe el identificador '.$id]);
    }
   } else {
    http_response_code(400);
    echo json_encode(['error' => 'datos invalidos']);
   }
}else{
    http_response_code(405);
    echo json_encode(['error' => 'no se ha recibido un pedido PUT. Estoy recibiendo: '.$_SERVER['REQUEST_METHOD']]);
}

function get(int $id, array $arr){
    for($i=0; $i < count($arr); $i++){
        if($arr[$i]["id"] == $id){
            return $i;
        };
    };

    return -1;
}