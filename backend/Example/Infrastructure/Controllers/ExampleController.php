<?php

namespace Backend\Example\Infrastructure\Controllers;

use Src\Core\Facades\DB;
use Src\Core\Http\Request\Request;
use Src\Core\Http\Response\ApiResponse;
use Src\Core\Http\Controller\Controller;
use Backend\Example\Application\NameCommand;
use Backend\Example\Application\TestCommand;
use Backend\Example\Domail\Model\ExampleModel;
use Backend\Example\Application\NameCommandHandler;
use Backend\Example\Application\TestCommandHandler;
use Backend\Example\Infrastructure\Request\ExampleRequest;

class ExampleController extends Controller
{
    public function __construct(
        private TestCommandHandler $handler,
        private NameCommandHandler $name,
    ) {
    }

    public function echo()
    {
        $data = $this->handler->echo(new TestCommand('New Ferchu', 'none@mail.com', 41));
        return ApiResponse::json(['data' => $data]);
    }

    public function name(Request $request,)
    {
        $data = $request->params();
        $command = new NameCommand($data['name']);
        $response = $this->name->run($command);
        return ApiResponse::json(['data' => $response]);
    }

    public function test()
    {
        $testRegister = DB::table('test')->all();
        if(count($testRegister) > 0) {
            $test = DB::table('test')->first();
        }
        else{
            $test = new ExampleModel();
            $test->id = uuid();
            $test->nombre = 'Ferchu';
            $test->email = 'ferchu@email.com';
            $test->edad = 41;
            $test->save();
        }
        return ApiResponse::json(['data' => $test]);
    }

    public function load(Request $request)
    {
        $request->validate(ExampleRequest::rules());
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
