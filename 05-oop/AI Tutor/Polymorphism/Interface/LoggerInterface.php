<?php 
declare(strict_types=1);

interface Logger {
    public function log(string $message);
    public function getLogs();
}


class FileLogger implements Logger {
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;

    }

    public function log(string $message) {
       file_put_contents($this->filename, $message . '\n', FILE_APPEND);
    }

    public function getLogs() {
       echo "hello there";
    }


}

$fileLogger = new FileLogger('log.txt');
$fileLogger->log('User logged in');