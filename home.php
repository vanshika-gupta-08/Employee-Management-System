<?php



session_start();

require_once("pdo.php");
    



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
	  
      <li ><a class="navbar-brand" href="#">WebSiteName</a></li>
      <li>Employee Management system</li>
      
      
    </ul>
      
    </div>
    <ul class="nav navbar-nav">
	  
      <li class="active"><a href="#">Home</a></li>
      <li><a href="add.php">Add</a></li>
      
    </ul>
  </div>
</nav>

   <?php
   
        $sql = "SELECT * FROM customer ORDER BY id DESC";
		$query = $pdo->prepare($sql);
		$query->execute();
 
		while($fetch = $query->fetch()){
		
 $d1=new DateTime($fetch['joiningdate']); 
 $d2=new DateTime();                                  
 $Months = $d2->diff($d1); 
 $f = (($Months->y) * 12) + ($Months->m);
		

?>
<div class = "container">

 
       <div style="
            font-size: 20px; 
            padding: 30px; 
            border: 1px solid lightgray; 
            margin: 10px;">
	<div class = "col-sm-5">
	 <div> Name:<?php echo $fetch['name']?></div>
	<div>Role:<?php echo $fetch['role']?></div>
	<div>Mobie:<?php echo $fetch['mobile']?></div>  
	
	</div> 
	<div class = "col-sm-7">
	<div> Manager:<?php echo $fetch['manager']?></div>
	<div>Office:<?php echo $fetch['office']?></div>
	<div>Joining date:<?php echo $fetch['joiningdate'].' ('.$f.' months)'?> </div>
	</div>
	<br><br><br>
	</div>
	

</div>
 
<?php
		
	}
?>
   
   


</body>
</html>
