<?php

namespace Backend\Test\Infrastructure\Controllers;

use Src\Core\Facades\DB;
use Src\Core\Http\Request\Request;
use Backend\Test\Application\NameCommand;
use Backend\Test\Application\TestCommand;
use Src\Core\Http\Response\ApiResponse;
use Src\Core\Http\Controller\Controller;
use Backend\Test\Application\NameCommandHandler;
use Backend\Test\Application\TestCommandHandler;
use Backend\Test\Infrastructure\Request\TestRequest;

class TestController extends Controller
{
    public function __construct(
        private TestCommandHandler $handler,
        private NameCommandHandler $name,
    )
        {
    }

    public function echo()
    {
        $data = $this->handler->echo(new TestCommand('Ferchu', 'none@mail.com', 41));
        return ApiResponse::json(['data' => $data]);
    }

    public function name(Request $request, )
    {
        $test = $request->params();
        $command = new NameCommand($test['name']);
        $response = $this->name->run($command);
        return ApiResponse::json(['data' => $response]);
    }

    public function test()
    {
        return ApiResponse::json(['data' => DB::table('test')->first()]);
    }

    public function load(Request $request)
    {
        $request->validate(TestRequest::rules());
        extract($request->data());
        $command = new TestCommand(
            $nombre,
            $email,
            $edad,
        );
        $handler = new TestCommandHandler();
        $entidad = $handler->run($command);
        
        return ApiResponse::json(['response' => 'Registro guardado correctamente', 'data' => $entidad]);
    }
}
