# Polymorphism and Method Overriding

Polymorphism allows methods to do different things based on the object that is invoking them. In PHP, you can achieve polymorphism through method overriding. This means a child class can override a method defined in its parent class to provide specialized behavior.

## Example: Overriding the study() Method
Let’s modify the GraduateStudent class so that it overrides the study() method inherited from Student:

```php 
<?php
// In Student.php
class Student {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function study() {
        return "{$this->name} is studying.";
    }
}

?>
```

```php 
<?php
// In GraduateStudent.php
require 'Student.php';

class GraduateStudent extends Student {
    public $degree;

    public function __construct($name, $age, $degree) {
        parent::__construct($name, $age);
        $this->degree = $degree;
    }

    // Overriding the study method
    public function study() {
        return "{$this->name} is studying advanced topics for their {$this->degree} degree.";
    }

    public function research() {
        return "{$this->name} is doing research for their {$this->degree} degree.";
    }
}

$gradStudent = new GraduateStudent('Tahir', 21, 'MCA');
echo $gradStudent->study();


?>
```

## Abstract Classes 
An abstract class is a clas that cannot be instantiated on its own and is meant to be extended by other classes. It can define abstract methods (methods without a body) that must be implemented by any subclass.

```php

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

```

## Why Abstract class plays an important role where we achieve polymorphism by overriding methods in a parent class. 
While it's true that you can achieve polymorphism by overriding methods in a parent class, abstract classes and abstract methods add some important benefits and enforce design contracts. Here’s how:

1. Enforced Implementation:
With abstract methods, any subclass is required to implement the method. This means that if you define an abstract method in your `Animal` class, every child class (like `Dog` and `Cat`) must provide its own implementation of `makeSound()`. Without an abstract method, a parent class might provide a default implementation that a child class could override, but there's no guarantee that every subclass will provide the behavior you expect.

2. Design Contract:
Abstract classes serve as a blueprint for your subclasses. They clearly define what methods must be present, creating a contract that all inheriting classes must follow. This is especially useful in larger projects where multiple developers are working together—everyone knows what methods are required without needing to read through all the implementations.

3. Prevention of Instantiation:
Abstract classes cannot be instantiated directly. This is beneficial because it prevents you from accidentally creating an object that is incomplete or doesn't have the necessary behavior. For example, it wouldn’t make sense to create a generic `Animal` object because you might want to ensure that only specific types of animals (like dogs or cats) with fully defined behavior are instantiated.

4. Avoiding Default Behavior Pitfalls:
If you simply provide a default implementation in a non-abstract parent class, subclasses might inherit behavior that doesn't fit their context, and you might forget to override it. An abstract method forces you to think about how each subclass should behave, reducing the risk of unexpected behavior from inherited default methods.

In summary, while polymorphism allows for method overriding, abstract classes enforce that overriding and ensure that all subclasses adhere to a specific interface. This leads to more robust, maintainable, and predictable code.