<?php

namespace Backend\ExampleDomail\Interfaces;

use Backend\ExampleDomail\Entity\TestEntity;

interface TestInterface
{
    public function save(TestEntity $entity): void;
}
