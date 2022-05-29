<?php 
include "database.php";

  mysqli_query($connection,"DELETE FROM users");

  header("Location:index.php");

?>