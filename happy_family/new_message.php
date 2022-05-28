<?php

    include "database.php";

    $name = $_POST["name"];
    $message = $_POST["message_text"];

    mysqli_query($connection,"INSERT INTO messages(name,text_message) VALUES('$name','$message')");
    header("Location: index.php");
?>