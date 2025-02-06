<?php 

abstract class Animal {
    public $name;
    public $age;

    public function describe() {
        return "This is {$this->name}, aged {$this->age}";
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound()
    {
        return "$this->name says: Woof!";
    }
}

class Cat extends Animal {
    public function makeSound()
    {
        return "$this->name says: Meow!";
    }
}



// Creating objects 
$dog1 = new Dog;
$dog1->name = "Mike";
echo $dog1->makeSound() . "<br>";

$cat1 = new Cat;
$cat1->name = 'John';
echo $cat1->makeSound() . "<br>";