<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$sub_id = $_GET['sub_id'];

$sql = mysqli_query($con,"SELECT * FROM subject WHERE sub_id = '$sub_id'")or die(mysqli_error($con));
$row = mysqli_fetch_array($sql);
$sub_code = $row['sub_code'];
$sub_name = $row['sub_name'];
$sub_desc = $row['sub_desc'];
$fac_id = $row['fac_id'];
$time = $row['time'];
$day = $row['day'];
$units = $row['units'];

$sql = mysqli_query($con, "SELECT * FROM faculty where fac_id = '$fac_id'")or die(mysqi_error($con));
$row = mysqli_fetch_array($sql);
$fac_name = $row['fac_name'];


echo $fac_id;
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
     
    <h2 class="form-signin-heading">Edit Subject <a href="admin_sub.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2><hr/>
    <form action="#" class="form-group" method="post">
    <div class="form-group">
         <label>Subject Code:</label>
        <input type="text" name="sub_code" value="<?php echo $sub_code?>" class="form-control" require>
        <label>Subject Name:</label>
        <input type="text" name="sub_name" value="<?php echo $sub_name?>" class="form-control" require>
    </div>
    <div class="form-group">
         <label>Subject Desc:</label>
        <input type="text" name="sub_desc" value="<?php echo $sub_desc?>" class="form-control" require>
        <label>Subject Units:</label>
        <input type="text" name="units" value="<?php echo $units?>" class="form-control" require>
    </div>
    <div class="form-group">
    <label>Faculty:</label>
    <?php
    
        $sql = mysqli_query($con, "SELECT * FROM faculty");
        echo "<select name='fac_id'>";
        echo "<option value='".$fac_id."'>".$fac_name."</option>";
        while($row = mysqli_fetch_array($sql)){
            echo "<option value='".$row['fac_id']."'>".$row['fac_name']."</option>";
        }
        echo "</select>";
    ?>
    </div>
    <div class="form-group">
        <label>Time:</label>
        <input type="text" name="time" value="<?php echo $time?>" class="form-control" require>
    </div>
    <div class="form-group">
    <label>Day:</label>
        <select name="day" >
            <option  value="<?php echo $day?>" disable "><?php echo $day?></option>
            <option value="MWF">MWF</option>
            <option value="TTh">TTh</option>
            <option value="S">Sat</option>
        </select>
        </div>
    <div class="form-group">
        <label>College:</label>
        <input type="text" name="college" placeholder="CCS" class="form-control" value="CCS" disabled>
    </div>      
    <input type="submit" name="submit" value="Submit" class="btn btn-info">

</form>

</body>
</html> 


<?php

if(isset($_POST['submit'])){
    $sub_code = $_POST['sub_code'];
    $sub_name = $_POST['sub_name'];
    $sub_desc = $_POST['sub_desc'];
    $fac_id = $_POST['fac_id'];
    $time = $_POST['time'];
    $day = $_POST['day'];
    $units = $_POST['units'];
    $fac_id = $_POST['fac_id'];



   $qry = mysqli_query($con, "SELECT * FROM subject where sub_desc = '$desc' OR sub_code = '$code'");
   $num_row = mysqli_num_rows($qry);
   if ($num_row > 0){   
    echo "<script>alert('Subject already exist')</script>";
   }else {
    $sub = mysqli_query($con, "UPDATE `subject` SET`fac_id`='$fac_id',`sub_code`='$sub_code',
    `sub_name`='$sub_name',`sub_desc`='$sub_desc',`college`='CCS',`time`='$time',`day`='$day',`units`='$units' WHERE sub_id = '$sub_id'");

    if($sub == true) {
        // echo "<script>alert('Successfullly Added')</script>";
        // echo "<script>window.open('admin_sub.php','_self')</script>";

    }else {
        return false;
        }
     }
    
}   

