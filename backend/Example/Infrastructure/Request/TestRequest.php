<?php

namespace Backend\Test\Infrastructure\Request;

use Src\Core\Http\Request\Interfaces\ApiRequestInterface;

class TestRequest implements ApiRequestInterface
{
    public static function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'email' => 'required|email',
            'edad' => 'required|integer|min:1|max:50',
        ];
    }
}
