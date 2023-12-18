<?php

namespace Backend\PersonalRoutes;

use Src\Core\Routing\Route;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;
use Src\Core\Http\Middlewares\AuthMiddleware;
use Src\Core\Http\Middlewares\TestMiddleware;
use Src\Core\Providers\Interfaces\RoutesProviderInterface;

class MiddlewareRoutes implements RoutesProviderInterface
{
    public static function load()
    {
        //**? Middlewares */
        Route::get('/api/v2', fn (Request $request) => ApiResponse::json(['response' => 'Hello you passed both middlewares Fer'], ApiResponse::ESTADO_200_OK))
            ->setMiddleware([TestMiddleware::class, AuthMiddleware::class]);

        Route::get('/api/v3', fn (Request $request) => ApiResponse::json(['response' => 'Hello Fer'], ApiResponse::ESTADO_200_OK))
            ->middleware('auth');

    }
}

