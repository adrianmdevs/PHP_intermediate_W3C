<?php  
 //Definining variables and setting them to empty values
 $name = $email = $gender = $age = "";

 function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $gender = test_input($_POST["gender"]);
    $age = test_input($_POST["age"]);
 }
?>