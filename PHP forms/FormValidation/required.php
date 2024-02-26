<?php  
    $nameErr = $emailErr = $genderErr = $ageErr = ""; //Variables hold data for 
    $name = $email = $gender = $age = "";

    function test_input($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if (empty($_POST["name"])){
            $nameErr = "The Name field is Required"; //Display the error message
        }
        else{
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "The Email field is Required!";
        }
        else{
            $name = test_input($_POST["email"]);
        }

        if(empty($_POST["gender"])){
            $genderErr = "The Gender field is Required!";
        }
        else{
            $gender = test_input($_POST["gender"]);
        }

        if(empty($_POST["age"])){
            $ageErr = "The Age field is Required!";
        }
        else{
            $age= test_input($_POST["age"]);
        }
    }
?>