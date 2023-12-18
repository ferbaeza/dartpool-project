<?php

namespace Backend\Example\Domail\Entity;

use Backend\Example\Application\TestCommand;


class ExampleEntity
{
    public function __construct(
        public string $id,
        public string $name,
        public string $email,
        public int $age,
    ) {
    }

    public static function fromCommand(TestCommand $command): self
    {
        return new self(
            id: uuid(),
            name: $command->name,
            email: $command->email,
            age: $command->age,
        );
    }


    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
