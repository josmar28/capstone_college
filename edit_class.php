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

    $class_id = $_GET['class_id'];

    $qry = mysqli_query($con, "SELECT  class.class_id AS id,
                            class.class_code as ccode,
                            class.subject_code AS scode,   
                            class.start_time AS start,
                            class.end_time AS end,
                            class.room AS room,
                            class.day AS day,
                            faculty.fac_name AS fac_name,
                            semester.sem AS sem,
                            class.fac_id as fac_id,
                            semester.sy AS sy
      FROM class INNER JOIN faculty ON class.fac_id = faculty.fac_id
           INNER JOIN semester ON class.sem_id = semester.sem_id
           Where class.class_id = '$class_id'");
    if($qry == true){
        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){
            while($row = mysqli_fetch_array($qry)){
                $ccode = $row['ccode'];
                $scode = $row['scode'];
                $start = $row['start'];
                $end = $row['end'];
                $room = $row['room'];
                $class_day = $row['day'];
                $faculty = $row['fac_name'];
                $sem = $row['sem'];
                $sy = $row['sy'];
                $fac_id = $row['fac_id'];
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
 
<h2 class="form-signin-heading">Edit Class <a href="class.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2><hr/>
<form action = "#" method = "POST">
    <div class="form-group">
    <label>Class Code:</label>
        <input type="text" name="ccode" class="form-control" value="<?php echo $ccode?>" required>
        <label>Subject Code:</label>
        <input type="text" name="scode" class="form-control" value="<?php echo $scode?>" required>
    </div>
    <div class="form-group">
    <label>Start time:</label>
        <input type="text" name="start" class="form-control" value="<?php echo $start?>" required>
        <label>End time:</label>
        <input type="text" name="end" class="form-control" value="<?php echo $end?>" required>
    </div>
    <div class="form-group">
    <label>Faculty:</label>
    <input list="faculty" name="faculty" value="<?php echo $fac_id?>">
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
        <label>Room:</label>
        <select name="room"  class="form-control">
        <option value="<?php echo $room?>" disable selected style="display:none;"><?php echo $room?></option>
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
        <option value="<?php echo $class_day?>" disable selected style="display:none;"><?php echo $class_day?></option>
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

        $qry = mysqli_query($con, "UPDATE `class` SET `fac_id`='$faculty',`class_code`='$ccode',`subject_code`='$scode',`start_time`='$start',`end_time`='$end',`room`='$room',`day`='$class_day' WHERE class_id = '$class_id'")or die(mysqli_error($con));
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