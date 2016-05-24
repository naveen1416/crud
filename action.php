<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];

$result= mysqli_query($conn ,"SELECT * FROM user");

$query="INSERT INTO user(name,email,phone) 
								VALUES('$name','$email','$phone')";
$result = mysqli_query($conn,$query);


	
}
header("Location:index.php");
?>