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
	  height:300px;
	  margin-left:400px;
	border-radius:5px;
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
						<a href="index.php"><button>back</button></a>
					
			
</div>

</body>
</html>
