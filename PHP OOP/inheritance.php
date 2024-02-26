<?php
class employee{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function intro(){
        echo "You are {$this->name} and you are {$this->age} and your salary is {$this->salary}";
    }
}
//Technician Inherited from employee

class Technician extends employee{
    public function message(){
        echo "I'm I a Technician or a developer?";
    }
}

//Developer extends employee
class Developer extends employee{
    public function message(){
        echo "I'm I a developer or a call Center Agent?";
    }
}
$charles = new Technician("Charles", 43, 56000);
$mike->message();


