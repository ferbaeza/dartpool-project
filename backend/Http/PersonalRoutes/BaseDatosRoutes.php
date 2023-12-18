<?php

namespace Backend\Http\PersonalRoutes;

use Src\Core\Routing\Route;
use Backend\Http\Models\UserModel;
use Src\Core\Facades\DB;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;
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

        Route::get('/usuarios', function (Request $request) {
            // $test = UserModel::find(5);
            // $test = UserModel::first();
            $test = UserModel::all()->toArray();
            // dd($test->toArray());
            $response = $test;
            return ApiResponse::json($response, 200);
        });

        Route::get('/db', function () {
            $data = DB::table('test')->all();
            return ApiResponse::json($data, 200);
        });


        Route::get('/migrations', function () {
            $data = DB::table('migrations')->all();
            return ApiResponse::json($data, 200);
        });

        // dd(DB::table('migrations')->all());

        // dd(DB::table('usuarios')
        // ->select('id')
        //     ->where('nombre', 'Ana Maria')->get());


        // dd(DB::table('usuarios')->id());


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

