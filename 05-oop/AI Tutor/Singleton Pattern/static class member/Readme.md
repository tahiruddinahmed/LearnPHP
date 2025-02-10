# Static member class

## 1. Static class methods
 - Definition : static methods belong to the class itself rather than any instance of the class. This means you can call a static method without first creating an object. 
 - Usage: Static methods are often used for utility or helper functions that don't rely on the object properties. They can also be used to store class-level data. 

### Key points 
 - Calling static methods: You call a static method using the scope resolution operator `::`.
 ```php
    ClassName::staticMethod();
 ```
 - No `$this`: since static methods are not bound to an instance you can't use `$this` within them. 


Example - 

```php 
class MathHelper {
    public static function add($a, $b) {
        return $a + $b;
    }
}

// Usage:
echo MathHelper::add(5, 3); // Outputs: 8

```

## 2. Singleton Pattern 
What is the singleton Pattern?

 - Definition: The singleton pattern is a design pattern that restricts a class to a single instance. This is particularly useful when exactly one object is needed to coordinate actions across the system. 
 - How it works: The class itself is responsible for keeping track of its single instance. Typically, the constructor is made `private` so that the class cannot be instantiated from outside. Instead, a static method (usually named `getInstance()`) returns the single instance of the class. 

### Key Points: 
 - private constructor: The constructor is private to prevent direct instantiation. 
 - Static instance holder: A static property holds the single instance. 
 - Global Access: The static method (e.g., `getInstance()`) provides global access to that instance. 
 - Lazy Initialization: The instance is created only when it is first needed. 

