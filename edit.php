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
<?php
    session_start();
    $con = mysqli_connect('localhost','root','','capstone2');
    $stud_id = $_GET['stud_id'];

    $qry = mysqli_query($con, "SELECT * FROM student WHERE stud_id  = '$stud_id'") or die(mysqli_error($con));
    if($qry == true){
        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){
            while($row = mysqli_fetch_array($qry)){
                $gender = $row['gender'];
                $fname = $row['fname'];
                $mname = $row['mname'];
                $lname = $row['lname'];
                $crs = $row['crs'];
                $year = $row['year'];
        }
    }else { 
        echo 'wala';
    }
}else {
    return false;
}

$qry = mysqli_query($con, "SELECT * FROM semester WHERE status  = 'active'") or die(mysqli_error($con));
if($qry == true){
    $num_row = mysqli_num_rows($qry);
    if($num_row > 0){
        while($row = mysqli_fetch_array($qry)){
            $sy = $row['sy'];
            $sem = $row['sem'];
    }
}else { 
    echo 'wala';
}
}else {
return false;
}
    ?>
     <div class="signin-form">

<div class="container-fluid">
    <div class = "col-md-4">
    </div>
<div class = "col-md-4 alert alert-info">
<h2 class="form-signin-heading"><center>Edit Account</center> <a href="admin.php"> <button class="btn btn-success" style="float:right">Back</button></a></h2> <hr/>
 
         <form action="#" class="form-group" method="post">
        <div class="form-group">
            <label>Gender</label>
                <select name="gender">
                <option value="<?php echo $gender?>" disable selected style="display:none;"  class="form-control"><?php echo $gender?></option>
                <option value="Female"  class="form-control">Female</option>
                <option value="Male"  class="form-control">Male</option>
        </select>
        </div>
        <div class="form-group">
        <label>Name:</label>
            <input type="text" name="fname" class="form-control" value="<?php echo $fname?>" required >
            <input type="text" name="mname" class="form-control" value="<?php echo $mname?>" required>
            <input type="text" name="lname" class="form-control" value="<?php echo $lname?>"  required>
        </div>
        <div class="form-group">
            <label>Course:</label>
            <input type="text" name="crs" class="form-control" value="<?php echo $crs?>" required>
            <label>Year:</label>
            <input type="text" name="yr" class="form-control" value="<?php echo $year?>" required>
        </div>    
        <div class="form-group">
            <label>Semester:</label>
            <input type="text" name="sem" class="form-control" value="<?php echo $sem?>" disabled>
            <label>School Year:</label>
            <input type="text" name="sy" class="form-control" value="<?php echo $sy?>" disabled>
        </div>    
        
            <input type="submit" name="submit" value="Submit" class="btn btn-info">
    </form>
</body>
</html>

<?php
$con = mysqli_connect('localhost','root','','capstone2');
if (isset($_POST['submit'])){
    $gender = $_POST['gender'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $crs = $_POST['crs'];
    $year = $_POST['yr'];

    $qry = mysqli_query($con, "UPDATE `student` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`gender`='$gender',`crs`='$crs',`year`='$year' WHERE stud_id = '$stud_id'") or die(mysqli_error($con));
    
    if($qry == true){
        echo "<script>alert('Successfully Edited')</script>";
        echo "<script>window.open('admin.php','_self')</script>";
    } else {
        return false;
    }


}

?>