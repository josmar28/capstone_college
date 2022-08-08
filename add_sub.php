
<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');

if(isset($_POST['submit'])){
   $code = $_POST['code'];
   $name = $_POST['name'];
   $desc = $_POST['desc'];
   $college = 'CCS';
   $units = $_POST['units'];
    $fac_id = $_POST['fac_id'];
    $time = $_POST['time'];
    $day = $_POST['day'];


   $qry = mysqli_query($con, "SELECT * FROM subject where sub_desc = '$desc' OR sub_code = '$code'");
   $num_row = mysqli_num_rows($qry);
   if ($num_row > 0){   
    echo "<script>alert('Subject already exist')</script>";
   }else {
    $sub = mysqli_query($con, "INSERT INTO `subject`(`sub_id`, `fac_id`, `sub_code`, `sub_name`, `sub_desc`, `college`, `time`, `day`, `units`) 
    VALUES (NULL,'$fac_id','$code','$name','$desc','$college','$time','$day','$units')");

    if($sub == true) {
        echo "<script>alert('Successfullly Added')</script>";
        echo "<script>window.open('admin_sub.php','_self')</script>";

    }else {
        return false;
        }
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
     
    <h2 class="form-signin-heading">Add Subject <a href="admin_sub.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2><hr/>
    <form action="#" class="form-group" method="post">
    <div class="form-group">
         <label>Subject Code:</label>
        <input type="text" name="code" placeholder="Subject Code" class="form-control" require>
        <label>Subject Name:</label>
        <input type="text" name="name" placeholder="Subject Name" class="form-control" require>
    </div>
    <div class="form-group">
         <label>Subject Description:</label>
        <input type="text" name="desc" placeholder="Subject Description" class="form-control" require>
        <label>Subject Units:</label>
        <input type="text" name="units" placeholder="Subject Units" class="form-control" require>
    </div>
    <div class="form-group">
    <label>Faculty:</label>
    <?php
    
        $sql = mysqli_query($con, "SELECT * FROM faculty");
        echo "<select name='fac_id'>";
        while($row = mysqli_fetch_array($sql)){
            
            echo "<option disable selected style='display:none;'>-select-</option>";
            echo "<option value='".$row['fac_id']."'>".$row['fac_name']."</option>";
            
        }
        echo "</select>";
    ?>
    </div>
    <div class="form-group">
        <label>Time:</label>
        <input type="text" name="time" placeholder="Time" class="form-control" require>
    </div>
    <div class="form-group">
    <label>Day:</label>
        <select name="day">
            <option disable selected style="display:none;">-select-</option>
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
