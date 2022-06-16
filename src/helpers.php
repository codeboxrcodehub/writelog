<?php

if (!function_exists('writelog')) {
    /**
     * write your log file here
     *
     * @param $log
     * @return void
     */
    function writelog($log)
    {
        $logObj = new \Dipudey\Writelog\WriteLog();
        $logObj->log($log);
    }
}
