<?php
// including the database connection file
include_once("config.php");

if(count($_POST) > 0)
{	
//print_r($_POST);exit;

	$id = $_POST['id'];
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
//updating the table
		$query = "UPDATE user SET name='".$name."',email='".$email."',phone='".$phone."' WHERE id ='".$id."'";
		//echo $query;die;
		$result = mysqli_query($conn,$query);
		
		header("Location: index.php");
}
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn,"SELECT * FROM user WHERE id = '".$id."'");

$res = mysqli_fetch_array($result);

	$name = $res['name'];
	$email = $res['email'];
	$phone= $res['phone'];
	


?>
<html>
  <head>
  <style>
 .card-box{
	  
	  border:1px solid silver;
	  background-color:#f2f2f2;
	  
	  width:400px;
	  margin:auto;
	border-radius:5px;
  }
  button,input,b{
	 
	 
	  margin-top:10px;
	  margin-left:30px;
	 
  }
   input,button{
	  margin-top:10px;
	  border: 1px solid silver;
	  padding:10px;
	  border-radius:3px;
  }
</style>
    <meta charset="UTF-8">
    <title>crud</title>
  </head>
  <body>
  <div class="card-box">
  <form action="edit.php" method="post">
	<b>name:</b><input type="text" name="name" value="<?php echo $name;?>" size="35" required /><br>
	<b>email:</b><input type="email" name="email" value="<?php echo $email;?>"size="35" required /><br>
	<b>phone:</b><input type="tel" name="phone" value="<?php echo $phone;?>" size="35"  required /><br>
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<button type="submit" name="Submit"  style="background-color:green;color:white;">submit</button>
  </form>
  </div>
  </body>
</html>
