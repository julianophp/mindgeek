<?php

namespace School\Log;

/**
 * Class Log
 * @package School\Log
 */
class Log
{
    /**
     * @param $msg
     * @return bool
     */
    public static function save($msg)
    {
        $logDir = dirname(__DIR__) . "/../log";

        if (!is_dir($logDir)) {
            return false;
        }

        $f = fopen(sprintf("%s/log.txt", $logDir), "a+");
        fwrite($f, sprintf('%s %s %s', date('Y-m-d H:i:s'), $msg, PHP_EOL));
        fclose($f);

        return true;
    }
}
