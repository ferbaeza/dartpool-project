<?php

return [
    'boot' => [
        Src\Core\Providers\DatabaseServiceProvider::class,
        Src\Core\Providers\SessionServiceProvider::class,
        Src\Core\Providers\ViewsServiceProvider::class,
        Src\Core\Providers\ServerServiceProvider::class,
    ],
    'runtime' => [
        App\providers\ApplicationServiceProvider::class,
    ],
    'cli' => [
        Src\Core\Providers\DatabaseServiceProvider::class,
    ],
];