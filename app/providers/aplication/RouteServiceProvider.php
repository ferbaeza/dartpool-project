<?php

namespace App\providers\aplication;

use Backend\PersonalRoutes\TestRoutes;
use Src\Core\Providers\RoutesProvider;
use Backend\PersonalRoutes\BaseDatosRoutes;
use Backend\PersonalRoutes\MiddlewareRoutes;
use Src\Core\Providers\Interfaces\RoutesProviderInterface;
use Backend\Example\Infrastructure\Routes\Routes as BackendExampleRoutes;
use App\Routes\api as ApiRoutes;

class RouteServiceProvider implements RoutesProviderInterface
{
    public static function load()
    {
        self::loadApplicationRoutes();
        TestRoutes::load();
        BaseDatosRoutes::load();
        MiddlewareRoutes::load();
        BackendExampleRoutes::load();
        ApiRoutes::load();
    }

    public static function loadApplicationRoutes()
    {
        RoutesProvider::load();
    }
}
