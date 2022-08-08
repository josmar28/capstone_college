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

    $sub_id = $_GET['sub_id'];

    $qry = mysqli_query($con, "SELECT * FROM subject WHERE sub_id = '$sub_id'");
    if($qry == true){
        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){
            while($row = mysqli_fetch_array($qry)){
                $sched_id = $row[0];
                $code = $row[1];
                $name = $row[2];
                $desc = $row[3];
                $units = $row[5];
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
 
<h2 class="form-signin-heading">Add Schedule <a href="admin_sub.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2><hr/>
<form action = "#" method = "POST">
    <div class="form-group">
    <label>Subject Code:</label>
        <input type="text" name="code" class="form-control" value="<?php echo $code?>" required>
        <label>Subject Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo $name?>" required>
    </div>
    <div class="form-group">
    <label>Subject Desc:</label>
        <input type="text" name="desc" class="form-control" value="<?php echo $desc?>" required>
        <label>Subject Units:</label>
        <input type="text" name="units" class="form-control" value="<?php echo $units?>" required>
    </div>
    <div class="form-group">
    <label>Faculty:</label>
    <input list="faculty" name="faculty">
  <datalist id="faculty">
    <?php
        $sql = mysqli_query($con, "SELECT * FROM faculty");
        while($row = mysqli_fetch_array($sql)){
            echo "<option value='".$row['fac_id']."'>".$row['fac_name']."";
        }
    
    ?>
  </datalist>
    </div>
    <div class="form-group">
    <label>Class Code:</label>
        <input type="text" name="ccode" class="form-control" required>
        <label>Start time:</label>
        <input type="text" name="start" class="form-control" required>
        <label>End time:</label>
        <input type="text" name="end"  class="form-control" required>
    </div> 
    <div class="form-group">
        <label>Room:</label>
        <select name="room" class="form-control">
        <option value="" disable selected style="display:none;">-select-</option>
            <option value="CLAB1">CLAB1</option>
            <option value="CLAB2">CLAB2</option>
            <option value="CLAB3">CLAB3</option>
            <option value="CLAB4">CLAB4</option>
            <option value="CLAB5">CLAB5</option>
        </select>
    </div>     
    <div class="form-group">
    <label>Class Day:</label>
    <select name="class_day" class="form-control">
        <option value="" disable selected style="display:none;">-select-</option>
            <option value="MWF">MWF</option>
            <option value="TTh">TTh</option>
            <option value="s">S</option>
        </select>

    </div>        
    <input type="submit" name="submit" value="Button" class="btn btn-success">
    <?php
    if(isset($_POST['submit'])){
        $class_code = $_POST['ccode'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $room = $_POST['room'];
        $class_day = $_POST['class_day'];
        $faculty = $_POST['faculty'];


        $sql = mysqli_query($con, "SELECT * FROM semester where status = 'active' ")or die(mysqli_error($con));
        $row = mysqli_fetch_array($sql);
        $sem_id = $row['sem_id']; 

        $qry = mysqli_query($con, "INSERT INTO `class`(`class_id`, `fac_id`, `class_code`, `sem_id`, `subject_code`, `start_time`, `end_time`, `room`, `day`) 
        VALUES (NULL,'$faculty','$class_code','$sem_id','$code','$start','$end','$room','$class_day')")or die(mysqli_error($con));
                if($qry == true){
                    echo "<script>alert('Successfully Added')</script>";
                     echo "<script>window.open('class.php','_self')</script>";
                }else {
                    return false;
                }
            
    }
    
    ?>

</form>
</body>
</html>