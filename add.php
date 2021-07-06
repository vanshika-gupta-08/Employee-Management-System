<?php


session_start();

require_once("pdo.php");
    


if(isset($_POST['name']) && isset($_POST['role'])  && isset($_POST['mobile'])
&& isset($_POST['manager'])  && isset($_POST['office']) && isset($_POST['join']))
{

   $name= htmlentities($_POST['name']);
   $role= htmlentities($_POST['role']);
   $mobile= htmlentities($_POST['mobile']);
   $manager= htmlentities($_POST['manager']);
   $office= htmlentities($_POST['office']);
    $join= htmlentities($_POST['join']);
  

   if ( strlen($_POST['name']) < 1 || strlen($_POST['role']) < 1
   || strlen($_POST['mobile']) < 1 || strlen($_POST['manager']) < 1
   || strlen($_POST['office']) < 1    || strlen($_POST['join']) < 1) 
   {
       $_SESSION["error"] = "All fields are required ";
	   header( "location:add.php");
	   return;
	   
	   }
	else if(! is_numeric($mobile) || strlen($mobile) < 10 || strlen($mobile) > 10)
	{
		$_SESSION['error'] = "Please enter correct Mobile No.";
		header("location:add.php");
		return;
	}
	
	
	 else {
      $sql = "insert into customer(name,role,mobile,manager,office,joiningdate) values(:name,:role,:mobile,:manager,:office,:joiningdate)";
		$stml = $pdo->prepare($sql);
		$stml->execute (array(
		
		':name' => $name,
	     ':role' => $role,
		':mobile' => $mobile,
		':manager' => $manager,
	     ':office' => $office,
		':joiningdate' => $join,
		));


		// $_SESSION['success'] = "Registration successful!! Please logIn to proceed further.";
		header("location:success.php");
		return;
      
    }
  } 
	


?>

<html lang="en">
<head>
  <title>Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	    <ul class="nav navbar-nav">
	  
      <li class="active"><a class="navbar-brand" href="#">WebSiteName</a></li>
      <li>Employee Management system</li>
      
      
    </ul>
      
    </div>
    <ul class="nav navbar-nav">
	  
      <li ><a href="home.php">Home</a></li>
      <li class="active" ><a href="#">Add</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
   <div class  = "container-fluid">
   <?php
   if(isset( $_SESSION["error"] ))                                             // for flash message
{
echo ("<p style = ' color: red ; '>".$_SESSION['error']."</p>" );     // for flash message
unset( $_SESSION["error"]);                                          // for flash message

}
?>

   <h2> --Add a Customer--</h2> <br>
             <form  method="post"  >
	
<div  class = "form-group">
<label for = "name" > <b>Name </b> </label>
<input   class = "form-control" type = "text" id = "name" name = "name"/><br>
</div>

<div  class = "form-group">
<label for = "role" ><b> Role </b> </label>
<input  class = "form-control" type = "text" id = "role" name = "role"/><br>
</div>
<div  class = "form-group">
<label for = "mobile" ><b> Mobile </b> </label>
<input  class = "form-control" type = "text" id = "mobile" name = "mobile"/><br>
</div>
<div  class = "form-group">
<label for = "manager" ><b> Manager </b> </label>
<input  class = "form-control" type = "text" id = "manager" name = "manager"/><br>
</div>
<div  class = "form-group">
<label for = "office" ><b> Office </b> </label>
<input  class = "form-control" type = "text" id = "office" name = "office"/><br>
</div>
<div  class = "form-group">
<label for = "join" ><b> Joining date</b> </label>
<input  class = "form-control" type = "date" id = "join" name = "join"/><br>
</div>
<input type = "submit" value = "Submit" >




</form>
   </div>
</div>

</body>
</html>
