<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>crud</title>
  </head>
  <body>
  <style>
  .card-box{
	  
	  border:1px solid silver;
	  background-color:#f2f2f2;
	  width:400px;
	  height:300px;
	  margin:auto;
	border-radius:5px;
  }
  input,button{
	  margin-top:10px;
	  border: 1px solid silver;
	  padding:10px;
	  border-radius:3px;
  }
  button{
	  margin-top:10px;
	  margin-left:10px;
  }
  </style>
 
  <div class="card-box" align="center">
   <h3 style="color:orange">Welcome to CRUD</h3>
  <form action="action.php" method="post">
	<b>name:</b><input type="text" name="name" size="35" required /><br>
	<b>email:</b><input type="email" name="email" size="35" required /><br>
	<b>phone:</b><input type="tel" name="phone" size="35" required /><br>
	<button type="submit" name="Submit" style="background-color:green;color:white;">submit</button>
	<button type="reset" style="background-color:orange;color:white;">reset</button>
  </form>
  <div>
  </body>
</html>

