<?php 
class Student {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;    
    }
    public function study() {
        // task
        return "{$this->name} is studying";
    }


}