<?php

namespace App\routes;

use Src\Core\Routing\Route;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;

class api
{
    public static function load()
    {
        Route::get('/api_dos', fn (Request $request) => json(['response' => 'Hello Fer desde api route_dos'], 200));
        Route::get('/adios', fn (Request $request) => ApiResponse::json(["message" => "Adios desde /adios"], 200));
    }

}

Route::get('/api', fn (Request $request) => json(['response' => 'Hello Fer api route'], 200));
Route::get('/adios', fn (Request $request) => ApiResponse::json(["message" => "Adios desde /adios"], 200));

