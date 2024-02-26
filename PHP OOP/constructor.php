<?php  
 class Technician{
    public $firstname;
    public $age;
    public $role;

    function __construct($firstname, $age, $role){
        $this->firstname = $firstname;
        $this->age = $age;
        $this->role = $role;
    }
    function get_name(){
        return $this->firstname;
    }
    function get_age(){
        return $this->age;
    }
    function get_role(){
        return $this->role;
    }
 }
 $tech01 = new Technician("Mike", 27, "Tech",); //Object properties are initialized upon creation. Less code. Eliminate Setters.
 echo $tech01->get_name();
 echo $tech01->get_age();
 echo $tech01->get_role();
?>