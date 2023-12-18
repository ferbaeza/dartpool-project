<?php

namespace Backend\Example\Infrastructure\Request;

use Src\Core\Http\Request\Interfaces\ApiRequestInterface;

class ExampleRequest implements ApiRequestInterface
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
