<?php

namespace Backend\ExampleDomail\Model;

use Src\Core\Database\Model\Model;

class TestModel extends Model
{
    protected ?string $table = 'test';
    protected array $fillable = ['id', 'nombre', 'email', 'edad'];

}
