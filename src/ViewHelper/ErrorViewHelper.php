<?php

namespace Mindgeek\ViewHelper;

use Exception;
use ReflectionClass;

/**
 * Class ErrorViewHelper
 * @package Mindgeek\ViewHelper
 */
class ErrorViewHelper
{
    /**
     * @param Exception $e
     */
    public static function error(Exception $e)
    {
        header('Content-Type: application/json');
        exit(json_encode([
            'status'    => 'Error',
            'message'   => (new ReflectionClass($e))->getShortName()
        ]));
    }
}