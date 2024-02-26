<?php 
//Interface definition
interface Animal{
    public function makeSound();
}
//Class definition
class Cat implements Animal{
    public function makeSound()
    {
        echo "Meow";
    }
}

class Dog implements Animal{
    public function makeSound()
    {
       echo "Bark"; 
    }
}

class Cow implements Animal{
    public function makeSound()
    {
        echo "Mooo";
    }
}

class Mouse implements Animal{
    public function makeSound()
    {
        echo "Squeak";
    }
}
//List of animals
$cat = new Cat();
$dog = new Dog();
$cow = new Cow();
$animals = [$cat, $dog, $cow];

//Tell each animal to make a sound
foreach($animals as $animal){
    $animal->makeSound();
}