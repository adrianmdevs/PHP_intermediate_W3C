<?php  
 class Developer{
    public $name;
    public $age;
    public $role;
    
    function __construct($name, $age,$role)
    {
        $this->name= $name;
        $this->$age= $age;
        $this->role= $role;
    }
    function __destruct()
    {
        echo "The Developer name is {$this->name}.";
        echo "The Developer Age is {$this->age}.";
        echo "The Developer role is {$this->role}.";
    }
 }
 $DevOne = new Developer("Charles",22, "FrontEnd"); //Called at the end to terminate script execution

?>