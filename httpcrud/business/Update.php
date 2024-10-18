<?php

namespace app\business;

use app\interfaces\RepositoryInterface;
use app\interfaces\ValidatorInterface;
use app\exception\DataException;

class Update {
    private RepositoryInterface $repository;
    private ValidatorInterface $validator;

    public function __construct(RepositoryInterface $repository, ValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function update($data): bool {
        if(!$this->validator->validateUpdate($data)){
            throw new DataException($this->validator->getErrors());
        }

        if(!$this->repository->exists($data["id"])){
            throw new DataException("el usuario no existe");
        }

        $this->repository->update($data);
        return true;
    }

}