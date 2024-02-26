<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class</title>
</head>
<body>
    <?php 
    class family{
        //properties
        public $name;
        public $age;
        public $role;

        //Methods
        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }
        function set_age($age){
            $this->age = $age;
        }
        function get_age(){
            return $this->age;
        }
        function set_role($role){
            $this->role= $role;
        }
        function get_role(){
            return $this->role;
        }

    }
    //Objects
    $Teresa = new family();
    $Jervas = new family();
    $Teresa->set_name('Teresa');
    $Teresa->set_age(44);
    $Teresa->set_role('Mother');
    $Jervas->set_name('Jervas');
    $Jervas->set_age(21);
    $Jervas->set_role('Brother');
    //Output the results
    echo $Teresa->get_name();
    echo $Teresa->get_age();
    echo $Teresa->get_role();

    echo $Jervas->get_name();
    echo $Jervas->get_name();
    echo $Jervas->get_name();

    ?>
</body>
</html>