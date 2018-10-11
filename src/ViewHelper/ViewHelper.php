<?php

namespace School\ViewHelper;

use Exception;
use ReflectionClass;

/**
 * Class ViewHelper
 * @package School\ViewHelper
 */
class ViewHelper
{
    /**
     * @param $string
     */
    public static function response($string)
    {
        $contentType = 'Content-Type: application/json';

        if (strpos($string, '<?xml') !== false)
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
