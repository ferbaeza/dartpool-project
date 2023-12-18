<?php


namespace Backend\Http\Models;

use Src\Core\Database\Model\Model;

class UserModel extends Model
{
    protected ?string $table = 'usuarios';
    protected array $fillable = ['id', 'nombre', 'email'];
}