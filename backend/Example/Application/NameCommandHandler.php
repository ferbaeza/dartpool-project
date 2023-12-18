<?php

namespace Backend\Example\Application;

class NameCommandHandler
{
    public function run(NameCommand $command)
    {
        return $command->name . ' desde el handler desde el backend';
    }
}
