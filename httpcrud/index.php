<?php

header("Content-Type: application/json");

require_once __DIR__."/validators/autoload.php";

use app\business\Add;
use app\business\Get;
use app\business\Update;
use app\business\Delete;
use app\data\Repository;
use app\validators\Validator;
use app\exception\DataException;
use app\exception\ValidationException;
use app\database\RepositoryDB;

//$repoistory = new Repository();
$validator = new Validator();

try{
    $repoistory = new RepositoryDB();


    switch($_SERVER['REQUEST_METHOD']){
        case "GET":
            $get = new Get($repoistory);
            echo json_encode($get->get());
            break;
        case "POST":
            $add = new Add($repoistory, $validator);
            $body = file_get_contents("php://input");
            $data = json_decode($body, true);
            $add->add($data);
            break;
        case "PUT":
            $body = file_get_contents("php://input");
            $data = json_decode($body, true);
            $update = new Update($repoistory, $validator);
            $update->update($data);
            break;
        case "DELETE":
            $id = $_GET["id"];
            $delete = new Delete($repoistory);
            $delete->delete($id);
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
}catch(PDOException $e){
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}catch(\Exception $e){
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}catch(TypeError $e){
    http_response_code(400);
    echo json_encode(['error' => $e->getMessage()]);
}