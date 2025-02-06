<?php 

abstract class Person{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // abstract method: subclasses must provide their own implementation
    abstract public function getRole();
}

class Student extends Person {
    public function getRole() {
        return "{$this->name} is a student";
    }
}

class GraduateStudent extends Student {
    public $degree;

    public function __construct($name, $age, $degree)
    {
        parent::__construct($name, $age);
        $this->degree = $degree;
    }

    public function getRole() {
        return "{$this->name} is a graduate student pursuing a {$this->degree} degree.";
    }
}


// Creating objects
$student1 = new Student('Tahir', 21);
echo $student1->getRole();
echo "<br>";
$gradute = new GraduateStudent('John', 24, 'MTech');
echo $gradute->getRole();
