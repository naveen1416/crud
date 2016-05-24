<?php
//including the database connection file
include("config.php");

//getting id of the data from url
//deleting the row from table
$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM user WHERE id=$id");


header("Location:index.php");
?>