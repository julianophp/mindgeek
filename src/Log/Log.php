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
        if (!is_dir("../log")) {
            return false;
        }

        $f = fopen("../log/log.txt", "a+");
        fwrite($f, sprintf('%s %s %s', date('Y-m-d H:i:s'), $msg, PHP_EOL));
        fclose($f);

        return true;
    }
}
