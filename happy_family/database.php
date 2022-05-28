<?php
    $connection = mysqli_connect("localhost","root","","happyfamily");

    if(mysqli_connect_errno())
    {
        print(mysqli_connect_error());
    }
    
?>