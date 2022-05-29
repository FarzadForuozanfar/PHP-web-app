<?php
    include "database.php";
    if(isset($_POST["gender"]) && $_POST["firstname"] && $_POST["lastname"] && $_POST["phonenumber"] && $_POST["email"])
    {
         
        if($_POST["gender"] == "male")
        {
            $gender = 1;
        }
        else
        {
            $gender = 0;
        }
        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $phone_number = $_POST["phonenumber"];
        $email = $_POST["email"];
        echo $first_name, $last_name,$phone_number,$email;
        mysqli_query($connection,"INSERT INTO users(first_name,last_name,phone,gmail,gender) VALUES('$first_name','$last_name','$phone_number','$email','$gender')");
        header("Location: index.php");
    }
    else
    {
        echo "no";
    }
?>