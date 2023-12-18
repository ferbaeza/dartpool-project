<?php

namespace Backend\Example\Infrastructure\Routes;

use Src\Core\Routing\Route;
use Src\Core\Http\Response\ApiResponse;
use Src\Core\Providers\Interfaces\RoutesProviderInterface;
use Backend\Example\Infrastructure\Controllers\ExampleController;

class Routes implements RoutesProviderInterface
{
    public static function load()
    {
        Route::get('/test', [ExampleController::class, 'echo']);
        Route::get('/test-midd', [ExampleController::class, 'test'])->middleware('test');
        Route::get('/test2', fn () => ApiResponse::json(['response' => 'Hello Fer desde ExampleRoutes']));
        Route::get('/test/{name}', [ExampleController::class, 'name']);
        Route::post('/test', [ExampleController::class, 'load']);
    }
}
