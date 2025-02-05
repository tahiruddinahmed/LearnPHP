<?php 

// Write a php program to create student class with properties name, age, and a method study()
// Create an object for the Student class, assign values, and call the method
class Student {
    public $name;
    public $age;

    public function study() {
        // task
        return "{$this->name} is studying";
    }


}

// $student = new Student();
// $student->name = "Tahir";
// $student->age = 21;
// echo $student->study();

