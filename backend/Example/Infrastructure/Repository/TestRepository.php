<?php

namespace Backend\Test\Infrastructure\Repository;

use Src\Core\Facades\DB;
use Backend\Test\Domail\Model\TestModel;
use Backend\Test\Domail\Entity\TestEntity;
use Backend\Test\Domail\Interfaces\TestInterface;

class TestRepository implements TestInterface
{
    public function save(TestEntity $entity):void
    {
        $model = new TestModel();
        $model->id = $entity->id;
        $model->nombre = $entity->name;
        $model->email = $entity->email;
        $model->edad = $entity->age;
        $model->save();
    }

    public function getEntity(string $email):void
    {
        DB::table('test')->where('email', $email)->first();
    }
}
