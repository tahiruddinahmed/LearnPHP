<?php


class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num * $num;
    }

}

// single design pattern 
/*
In short singleton means that certain class should be created only 
once and you should not be able to created again
*/
// Exendive resources
class Connection {
    private static $instance = null;
    private function __construct(){}

    public static function singleton() {
        if(null === static::$instance) {
            static::$instance = new Connection();
        }
        
        return static::$instance;
    }
}


$connection = Connection::singleton();

var_dump(
    MathUtils::$pi,
    MathUtils::square(5)
);