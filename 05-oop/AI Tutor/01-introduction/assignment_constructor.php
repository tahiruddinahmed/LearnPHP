<?php 
/**
 * Task: Modify the Student Class with a Constructor
Add a constructor method __construct to the Student class that takes parameters for name and age.
Update the object creation to pass these values directly into the constructor.
Call the study() method and print its output.
 */

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

$student = new Student('Tahir Uddin Ahmed', 21);
echo $student->study();