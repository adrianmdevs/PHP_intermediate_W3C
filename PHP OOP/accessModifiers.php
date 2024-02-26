<?php  
    //There are three access modifiers. Public, Private and Protected
    //Public -> Default AM. Can only be accessed globally
    //Private -> Only accessible within the class
    //Protected - > Accessible to the class and classes derived from that class.

 class Technician{
    public $name;
    private $salary;
    protected $role;
 }
 $James = new Technician($name, $salary, $role);
 $james->name= "James"; //Yields the name as the Output
 $james->salary= "James"; //Yields an Error
 $james->role= "James"; //Yields an Error

    

?>