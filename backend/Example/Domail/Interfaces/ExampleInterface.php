<?php

namespace Backend\Example\Domail\Interfaces;

use Backend\Example\Domail\Entity\ExampleEntity;


interface ExampleInterface
{
    public function save(ExampleEntity $entity): void;
}
