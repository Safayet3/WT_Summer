<?php

    if(isset($_REQUEST["submit"])){
        if(empty($_REQUEST["fname"]) || empty($_REQUEST["lname"])){
            echo "Please enter name <br>";
        }
        elseif(is_numeric($_REQUEST["fname"]) || is_numeric($_REQUEST["lname"])){
            echo "Names should not contain numeric characters <br>";
        }
        else{
            $fname=$_REQUEST["fname"];
            $lname = $_REQUEST["lname"];
            echo "The first name is ". $fname. "The last name is ". $lname. "<br>";
        }
        if(empty($_REQUEST["age"])){ 
            echo "Please enter age <br>";
        }
        else{
            if(is_numeric($_REQUEST["age"])){
                $age = $_REQUEST["age"];
                echo "The age is ". $age. "<br>";
            }
            else{
                echo "Age should be number <br>";
            }
        }
    
        if(isset($_REQUEST["designation"])){
            $designation = $_REQUEST["designation"];
            echo "The designation is ". $designation. "<br>";
        }
        else{
            echo "Radio is not selected <br>";
        }
        if(isset($_REQUEST["language"])){
            echo "Checkbox is selected <br>";
        }
        else{
            echo "Please Select checkbox <br>";
        }
    
        if(empty($_REQUEST["email"])){
            echo "Please enter Email <br>";
        }
        else{
            $email = $_REQUEST["email"];
            echo "The email is ". $email . "<br>";
        }
        if(empty($_REQUEST["pass"])){
            echo "Please enter password <br>";
        }  
        else{
            $pass = $_REQUEST["pass"];
            if(strlen($pass)< 6){
                echo "Password must be 6 characters";
            }
            else{
                echo "Password is entered";
            }
        }
    
    }

?>