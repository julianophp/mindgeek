<?php

namespace Mindgeek\ViewHelper;

use Exception;
use ReflectionClass;

class ErrorViewHelper
{
    public static function error(Exception $e)
    {
        header('Content-Type: application/json');
        exit(json_encode([
            'status'    => 'Error',
            'message'   => (new ReflectionClass($e))->getShortName()
        ]));
    }
}