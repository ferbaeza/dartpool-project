<?php

namespace Backend\PersonalRoutes;

use Src\Core\Facades\DB;
use Src\Core\Routing\Route;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;
use Backend\PersonalRoutes\Models\UserModel;
use Src\Core\Providers\Interfaces\RoutesProviderInterface;

class BaseDatosRoutes implements RoutesProviderInterface
{
    public static function load()
    {
        //*! DDBB */
        Route::post('/usuario', function (Request $request) {
            $data = $request->data();
            $uuid = uuid();
            $data['id'] = $uuid;
            return ApiResponse::json(UserModel::create($data)->toArray(), 200);
        });

        Route::post('/newusuario', function (Request $request) {
            $data = $request->data();
            $uuid = uuid();

            $user = new UserModel();
            $user->id = $uuid;
            $user->nombre = $data['nombre'];
            $user->email = $data['email'];
            $user->save();
            return ApiResponse::json($user->toArray(), 200);
        });

        Route::get('/usuarios', function (Request $request) {
            $test = UserModel::all()->toArray();
            $response = $test;
            return ApiResponse::json($response, 200);
        });

        Route::get('/usuarios/all', function () {
            $data = DB::table('usuarios')->all();
            return ApiResponse::json($data, 200);
        });

        Route::get('/usuario/{nombre}', function () {
            $data = DB::table('usuarios')->all()->where('nombre', 'Ana Maria')->get();
            return ApiResponse::json($data, 200);
        });

        Route::get('/db', function () {
            $data = DB::table('test')->all();
            return ApiResponse::json($data, 200);
        });


        Route::get('/migrations', function () {
            $data = DB::table('migrations')->all();
            return ApiResponse::json($data, 200);
        });

        // //***? Uso de Modelos */
        // (UserModel::all());
        // UserModel::create(['id' => '57', 'nombre' => 'Fernando']);

        // $user = new UserModel();
        // $user->nombre = 'Fernando';
        // $user->id = 6;
        // $user->save();

        // dd(UserModel::all());
    }
}
