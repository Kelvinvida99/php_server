<?php

namespace app\interfaces;

interface ValidatorInterface {
    public function getErrors(): string;
    public function validateAdd($data): bool;
    public function validateUpdate($data): bool;
}