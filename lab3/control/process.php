<?php
$nameError=" ";

    if(isset($_REQUEST["submit"])){
        if(empty($_REQUEST["fname"]) || empty($_REQUEST["lname"])){
            $nameError="Please enter name <br>";
			
        }
        elseif(is_numeric($_REQUEST["fname"]) || is_numeric($_REQUEST["lname"])){
            $nameError="Names should not contain numeric characters <br>";
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

        $target_dir = "uploads/";
        $target_file = $target_dir . $_FILES["file"]["name"];



	if (move_uploaded_file($_FILES["file"]["tmp_name"],"../uploads/".$_FILES["file"]["name"])) {
       echo $_FILES["file"]["type"];
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $fileLocation= "../uploads/".$_FILES["file"]["name"];

        $checked="";
        
        foreach($_POST['language'] as $selected){
            $checked =  $selected.",".$checked;
            }


        $formdata = array(
            'firstname'=> $_REQUEST["fname"],
            'lastname'=> $_REQUEST["lname"],
            'age'=>$_REQUEST["age"],
            'designation'=>$_REQUEST["designation"],
            'language'=>$checked,
            'email' => $_REQUEST["email"],
            'password'=>$_REQUEST["pass"],
            'File'=> $fileLocation
        );
        $existingdata = file_get_contents('../data/data.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("../data/data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else {
	        echo "no data saved";
        }

     $data = file_get_contents("../data/data.json");
	 $mydata = json_decode($data);

    }

?>