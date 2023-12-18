<?php

namespace Backend\Example\Domail\Model;

use Src\Core\Database\Model\Model;

class ExampleModel extends Model
{
    protected ?string $table = 'test';
    protected array $fillable = ['id', 'nombre', 'email', 'edad'];
}
