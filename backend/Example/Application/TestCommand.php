<?php

namespace Backend\Example\Application;

class TestCommand
{
    public function __construct(
        public string $name,
        public string $email,
        public int $age,
    ) {
    }
}
