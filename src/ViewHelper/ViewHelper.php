<?php

namespace Mindgeek\ViewHelper;

use Exception;
use ReflectionClass;

/**
 * Class ViewHelper
 * @package Mindgeek\ViewHelper
 */
class ViewHelper
{
    /**
     * @param $string
     */
    public static function response($string)
    {
        $contentType = 'Content-Type: application/json';

        if (strpos($string, '<?xml version=\"1.0\"?>') !== false)
        {
            $contentType = 'Content-Type: text/xml';
        }

        header($contentType);
        die($string);
    }

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