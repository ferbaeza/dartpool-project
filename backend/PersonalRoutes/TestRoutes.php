<?php

namespace Backend\PersonalRoutes;


use Src\Core\Routing\Route;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;
use Src\Core\Providers\Interfaces\RoutesProviderInterface;

class TestRoutes implements RoutesProviderInterface
{
    public static function load()
    {
        //**? Routes con Parametros */

        Route::get('/hola/{id}', function (Request $request) {
            $data = $request->params();
            return ApiResponse::json($data, ApiResponse::ESTADO_200_OK);
        });

        Route::get('/hello/name/{name}/dia/{dia}', function (Request $request) {
            $data = $request->params();
            return ApiResponse::json($data, ApiResponse::ESTADO_200_OK);
        });


        Route::get('/rules', fn (Request $request) => json(['response' => 'Rules Get Api']));
        Route::post('/rules', fn (Request $request) => ApiResponse::json(
            $request->validate([
                'number' => 'required|integer|min:1|max:10',
                'email' => 'required|email',
            ], [
                'number' => [
                    'max' => 'El campo number debe ser menor a 10',
                ],
                'email' => [
                    'email' => 'El campo email debe ser un email valido',
                ],
            ]),
            200
        ));

        Route::get('/sesion', function (Request $request) {
            session()->set('name', 'Fernando');
            session()->set('email', 'fer@mail.com');
            $data =[
                'all' => session()->all(),
            ];
            return ApiResponse::json($data, 200);

        });

    }
}

