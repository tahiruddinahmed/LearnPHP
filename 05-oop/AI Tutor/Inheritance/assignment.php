<?php 

/*
 Task: Create a Child Class
   1. Create a new class called `GraduateStudent` that inherits from the Student class.
   2. Add a new property degree to the GraduateStudent class.
   3. Implement a constructor for GraduateStudent that takes name, age, and degree, and initializes both the inherited properties and the new property.
   4. Add a new method research() that returns a string indicating that the graduate student is doing research.
Instantiate a GraduateStudent object and display both study() and research() outputs.

*/
require 'Student.php';

class GraduateStudent extends Student {
    public $degree; 

    public function __construct($name, $age, $degree)
    {
        parent::__construct($name, $age);
        $this->degree = $degree;
    }

    public function research() {
        return "{$this->name} who is pursuing a {$this->degree} is doing research";
    }

}

$graduteStudent = new GraduateStudent('Tahir', 21, 'MCA');
echo $graduteStudent->research();

/*
Things to Consider:
Code Organization:
    Separating your Student class into its own file (Student.php) is a great practice as it promotes 
    code reusability and better organization.

Parent Constructor Call:
    Using parent::__construct() is important because it ensures that the parent class initializes 
    its part of the object properly before the child class adds its own properties.

Encapsulation:
    As you continue to build more advanced OOP concepts, think about encapsulation. 
    You might want to consider using private or protected properties along with getter 
    and setter methods to control access to your class properties.
*/

