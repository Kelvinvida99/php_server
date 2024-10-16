<?php

header("Content-Type: application/json");

$arr = [
    [
        "id" => 1,
        "name" => "Kelvin",
        "email" => "kelvin@gmail.com",
    ],
    [
        "id" => 2,
        "name" => "Pedro",
        "email" => "pedro@gmail.com",
    ]
];

if($_SERVER['REQUEST_METHOD'] == "DELETE"){
    extract($_GET);
    $index = get($id, $arr);
    
    if($index > -1){
        unset($arr[$index]);
        $arr = array_values($arr);
        http_response_code(200);
        echo json_encode($arr);
    }else{
        http_response_code(404);
        echo json_encode(['error' => 'el usuario no existe']);
    }



} else {
    http_response_code(405);
    echo json_encode(['error' => 'no se ha recibido un pedido DELETE']);
}

function get(int $id, array $arr){
    for($i=0; $i < count($arr); $i++){
        if($arr[$i]["id"] == $id){
            return $i;
        };
    };

    return -1;
}