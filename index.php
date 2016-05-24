 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>crud</title>
  </head>
  <body>
<style>
table, th, td {
    border: 1px solid black;
	 margin-left:75px;
}
 .card-box{
	  
	  border:1px solid silver;
	  background-color:#f2f2f2;
	  
	  width:700px;
	  margin:auto;
	border-radius:5px;
  }
  button{
	  margin-top:10px;
	  margin-left:10px;
	 
  }
</style>
<?php
//including the database connection file
include_once("config.php");
$result = mysqli_query($conn ,"SELECT * FROM user");
?>
<div class="card-box">

<a href="add.php"><button type="submit">Add</button></a>
					<table>
						<thead>
						  <tr class="info">
							
							<th>id</th>
							<th>Name</th>
							<th>email</th>
							<th>phone</th>
							<th>Actions</th>							
						  </tr>
						</thead>
						<tbody>
							<?php 
							if(!empty($result))
							{
								while($res = mysqli_fetch_array($result)) { 	
									echo "<tr>";

									echo "<td>".$res['id']."</td>";
									echo "<td>".$res['name']."</td>";
									echo "<td>".$res['email']."</td>";
									echo "<td>".$res['phone']."</td>";
									
									echo "<td><a href='delete.php?id=".$res['id']."' onclick='myFunction()';return false;>Delete</a>||
									<a href='edit.php?id=".$res['id']."' onclick='myFunction()';return false;>edit</i></a>||<a href='view.php?id=".$res['id']."'>view</i></a>
									
									</td>";
									echo "</tr>";	
								}
							}
							?>
						 
						</tbody>
					 </table>
			
</div>
<script>
function myFunction() {
    alert("are you sure");
}
</script>
</body>
</html>
