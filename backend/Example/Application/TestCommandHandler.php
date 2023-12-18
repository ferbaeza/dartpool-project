<?php

namespace Backend\Example\Application;

use Src\Core\Facades\DB;
use Backend\Example\Domail\Entity\ExampleEntity;
use Backend\Example\Domail\Interfaces\ExampleInterface;
use Backend\Example\Infrastructure\Repository\ExampleRepository;


class TestCommandHandler
{
    public function run(TestCommand $command): ExampleEntity
    {
        $entity = ExampleEntity::fromCommand($command);
        $repo = singleton(ExampleInterface::class, ExampleRepository::class);
        $repo->save($entity);
        return $entity;
    }

    public function echo(TestCommand $command)
    {
        $data = DB::table('test')->all();
        $data['command'] = $command;
        return $data;
    }
}
