<?php 

class Logger {
    private static $instance = null;

    // private constructor to prevent instantiation
    private function __construct(){}

    // prevent cloning
    private function __clone(){}


    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Logger();
        }

        return self::$instance;
    }

    public function log(string $message) {
        echo $message . "<br>";
    }
}


$logger = Logger::getInstance();
$logger2 = Logger::getInstance();
$logger2->log("Hi, I am Tahir");
$logger->log('Hello there, how are you');
$logger->log('This is a success message');