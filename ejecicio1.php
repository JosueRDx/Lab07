<?php

// Define a simple class named Person
class Person {
    // Properties (attributes) of the class
    public $name;
    public $age;

    // Constructor method, called automatically when an object is created
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to greet the person
    public function greet() {
        return "Hello, my name is $this->name and I am $this->age years old.";
    }
}

// Creating an object (instance) of the Person class    
$person1 = new Person("John", 30);

// Accessing properties and methods of the object
echo $person1->name; // Output: John
echo $person1->age; // Output: 30
echo $person1->greet(); // Output: Hello, my name is John and I am 30 years old.

?>
