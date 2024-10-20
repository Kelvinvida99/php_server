<?php

namespace app\database;
use app\interfaces\RepositoryInterface;
use app\database\BaseRepository;
use PDO;

class RepositoryDB extends BaseRepository implements RepositoryInterface {
    const TABLE = "beer";

   public function create($data){
    return [];
   }

   public function get(): array {
    $sql = "SELECT * FROM " . self::TABLE;
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
   }

   public function update($data)
   {
    return [];
   }

  public function delete(int $id)
  {
   return [];
  }

 public function exists(int $id): bool
 {
  return false;
 }
}