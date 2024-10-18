<?php

namespace app\business;

use app\interfaces\RepositoryInterface;
use app\exception\DataException;

class Delete {
    private RepositoryInterface $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function delete(int $id): bool {
        if(!$this->repository->exists($id)){
            throw new DataException("el usuario no existe");
        }

        $this->repository->delete($id);
        return true;
    }

}