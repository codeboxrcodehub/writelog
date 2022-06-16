<?php

namespace Dipudey\Writelog;

use Dipudey\Writelog\Exception\FilePathNotFoundException;

class WriteLog
{

    protected $filePath;
    protected $fileName;

    public function __construct()
    {
        $this->filePath = config("writelog.directory").DIRECTORY_SEPARATOR.config("writelog.file_name") ?? 'debug.log';
        $this->fileName = config("writelog.file_name") ?? 'debug.log';
    }

    /**
     * Write log to log file
     *
     * @param  string|array|object  $log
     */
    public function log($log)
    {
        if(!$this->filePath) {
            throw new FilePathNotFoundException("Log file path not found in writelog config");
        }

        if (is_array($log) || is_object($log)) {
            file_put_contents($this->filePath, print_r($log, true), FILE_APPEND);
        } else {
            if (is_bool($log)) {
                file_put_contents(
                    $this->filePath,
                    ($log == true) ? $log.' is true'.PHP_EOL : $log.' is false'.PHP_EOL,
                    FILE_APPEND
                );
            } else {
                if (is_null($log)) {
                    file_put_contents($this->filePath, 'NULL'.PHP_EOL, FILE_APPEND);
                } else {
                    file_put_contents($this->filePath, $log, FILE_APPEND);
                }
            }
        }
    }
}
