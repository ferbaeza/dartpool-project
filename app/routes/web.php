<?php

use Src\Core\Routing\Route;
use Src\Core\Http\Request\Request;


//**? Routes con funciones directas */

Route::get('/', fn () => view('home', ['name' => 'to Fast Php Api']));
Route::get('/home', fn () => view('home', ['name' => 'Fernando']));
Route::get('/redirect', fn () => redirect('/home'));