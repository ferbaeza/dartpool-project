<?php

namespace App\providers;

use App\providers\aplication\RouteServiceProvider;
use App\providers\aplication\RulesServiceProvider;
use Src\Core\Providers\Interfaces\ServiceProviderInterface;

class ApplicationServiceProvider implements ServiceProviderInterface
{
    public function register()
    {
        RulesServiceProvider::load();
        RouteServiceProvider::load();
    }
}
