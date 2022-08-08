<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
if(isset($_POST['submit'])){
$equip_name = $_POST['equip_name'];
$equip_model = $_POST['equip_model'];
$equip_desc = $_POST['equip_desc'];
$serial_num = $_POST['serial_num'];
 
$sql = mysqli_query($con, "INSERT INTO `equipment`(`equip_id`, `equip_name`, `equip_model`, `equip_desc`,`serial_num`) 
                VALUES (NULL,'$equip_name','$equip_model','$equip_desc','$serial_num')")or die(mysqli_error($con));

if($sql){
    echo "<script>alert('Successfully Added')</script>";
    echo "<script>window.open('equipment.php','_self')</script>"; 
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/default.css">
    <link rel="icon" type="image/png" href="image/ndu_seal.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/admin.css"/>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <title>Notre Dame University</title>
</head>
<body>

<div class="signin-form">

	<div class="container-fluid">
    	<div class = "col-md-4">
		</div>
	<div class = "col-md-4 alert alert-info">
     
    <h2 class="form-signin-heading">Edit Equipment <a href="equipment.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2> <hr/>
       <form class="form-signin" method="post" action = '#'>
      
        <div class="form-group">
		Equipment Name:
        <input type="text" class="form-control" name="equip_name" required  />
        </div>
        
		<div class="form-group">
		Equipment Model:
        <input type="text" class="form-control"  name="equip_model" required  />
        </div>
		
		<div class="form-group">
		Equipment Description:
        <input type="text" class="form-control" name="equip_desc" required  />
        </div>
        <div class="form-group">
		Serial Number:
        <input type="text" class="form-control" name="serial_num" required  />
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>
</div>
</div>
</div>
</body>
</html> 
