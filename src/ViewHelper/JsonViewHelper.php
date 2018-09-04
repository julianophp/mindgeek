<?php

namespace Mindgeek\ViewHelper;

/**
 * Class JsonViewHelper
 * @package Mindgeek\ViewHelper
 */
class JsonViewHelper
{
    /**
     * @param string $json
     */
    public static function json(string $json)
    {
        header('Content-Type: application/json');
        exit($json);
    }
}