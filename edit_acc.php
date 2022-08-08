

<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$user_id = $_SESSION['user_id'];

$sql = mysqli_query($con,"SELECT * FROM student WHERE user_id = '$user_id'");
$row = mysqli_fetch_array($sql);
$fname = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];

if(isset($_POST['submit'])){
   $fname = $_POST['fname'];
   $mname = $_POST['mname'];
   $lname = $_POST['lname'];


    $sql = mysqli_query($con,"UPDATE `student` SET `fname`='$fname',`mname`='$mname',`lname`='$lname' WHERE user_id = '$user_id'") or die(mysqli_error($con));

    if($sql == true) {
        echo "<script>alert('Successfullly Edited')</script>";
        echo "<script>window.open('trans.php','_self')</script>";

    }else {
        return false;
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
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
     
    <h2 class="form-signin-heading">Edit Account<a href="trans.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2><hr/>
    <form action="#" class="form-group" method="post">
    <div class="form-group">
         <label>Firstname:</label>
        <input type="text" name="fname" value="<?php echo $fname?>" class="form-control" require>
    </div>
    <div class="form-group">
    <label>Middlename:</label>
        <input type="text" name="mname" value="<?php echo $mname?>" class="form-control" require>
    </div> 
    <div class="form-group">
         <label>Lastname:</label>
        <input type="text" name="lname" value="<?php echo $lname?>" class="form-control" require>
    </div> 
    <input type="submit" name="submit" value="Submit" class="btn btn-info">

</form>

</body>
</html> 
