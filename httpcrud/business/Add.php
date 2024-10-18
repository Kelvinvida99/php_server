<?php

namespace app\business;

use app\interfaces\ValidatorInterface;
use app\interfaces\RepositoryInterface;

class Add {
    private RepositoryInterface $repository;
    private ValidatorInterface $validator;

    public function __construct(RepositoryInterface $repository, ValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function add($data): bool {
        if(!$this->validator->validateAdd($data)){
            throw new ($this->validator->getErrors());
        }

        $this->repository->create($data);
        return true;
    }
}