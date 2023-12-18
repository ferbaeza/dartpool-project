<?php

namespace App\providers\aplication;

use Src\Core\Validation\Rule;

class RulesServiceProvider 
{
    public static function load()
    {
        Rule::loadRules();
    }
}
