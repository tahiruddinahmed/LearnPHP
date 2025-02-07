<?php 

interface Extracurricular {
    public function participate();
}


class Student implements Extracurricular {
    public $name;
    public $age;

    public function __construct($name, $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function participate()
    {
        return "{$this->name} is participating in a club.";
    }
}

class GraduateStudent extends Student {
    public $degree;

    public function __construct($name, $age, $degree)
    {
        parent::__construct($name, $age);
        $this->degree = $degree;
    }

    public function participate()
    {
        return "{$this->name} is participating in a research symposium.";
    }
}


$student = new Student("John", 21);
$gradute = new GraduateStudent("Tahir Uddin Ahmed", 21, 'MCA');

echo $student->participate() . "<br>";
echo $gradute->participate() . "<br>";