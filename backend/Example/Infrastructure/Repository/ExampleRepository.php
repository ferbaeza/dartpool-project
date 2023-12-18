<?php

namespace Backend\Example\Infrastructure\Repository;

use Src\Core\Facades\DB;
use Backend\Example\Domail\Model\ExampleModel;
use Backend\Example\Domail\Entity\ExampleEntity;
use Backend\Example\Domail\Interfaces\ExampleInterface;

class ExampleRepository implements ExampleInterface
{
    public function save(ExampleEntity $entity): void
    {
        $model = new ExampleModel();
        $model->id = $entity->id;
        $model->nombre = $entity->name;
        $model->email = $entity->email;
        $model->edad = $entity->age;
        $model->save();
    }

    public function getEntity(string $email): void
    {
        DB::table('test')->where('email', $email)->first();
    }
}
