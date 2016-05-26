<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>crud</title>
  </head>
  <body>
  <style>
  table, th{
    border: 1px solid black;
	 margin:10px;
}
  .card-box{
	  
	  border:1px solid silver;
	  background-color:#f2f2f2;
	  width:400px;
	  height:100px;
	  margin:auto;
	border-radius:5px;
  }
   input,button{
	  margin-top:10px;
	  border: 1px solid silver;
	  padding:10px;
	  border-radius:3px;
	   margin-top:10px;
	  margin-left:10px;
  }
  </style>
<?php
//including the database connection file
include_once("config.php");
$result = mysqli_query($conn ,"SELECT * FROM user");
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn,"SELECT * FROM user WHERE id = '".$id."'");



?>

<div class="card-box">
						<table>
							<?php 
							if(!empty($result))
							{
								while($res = mysqli_fetch_array($result)) { 	
									

									echo "<tr>";
									echo "<th style='color:blue;'>".$res['id']."</th>";
									echo "<th>".$res['name']."</th>";
									echo "<th>".$res['email']."</th>";
									echo "<th style='color:red;'>".$res['phone']."</th>";
									echo "</tr>";
									
										
								}
							}
							?>
						 
						</table>
						<a href="index.php"><button style="background-color:green;color:white;">back</button></a>
					
			
</div>

</body>
</html>
