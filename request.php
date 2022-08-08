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
$user_id = $_SESSION['user_id'];
$sem_id = $_SESSION['sem_id'];
$con = mysqli_connect('localhost','root','','capstone2');
date_default_timezone_set('Asia/Manila');
$date = date('F j, Y g:i:a');

    ?>

    <div class="signin-form">

	<div class="container-fluid">
    	<div class = "col-md-4">
		</div>
	<div class = "col-md-4 alert alert-info">
    <h2 class="form-signin-heading">REQUEST <a href="trans.php"> <button class="btn btn-success" style="float:right">Back</button></a></h2> <hr/>
       <form class="form-signin" method="post" action = '#'">  
    <div class="form-group">
    </div>
    <div class="form-group">
    <label>Subject:</label>
    <input list="subject" name="sub_id">
  <datalist id = "subject">
    <?php
        $sql = mysqli_query($con, "SELECT * FROM subject");
        while($row = mysqli_fetch_array($sql)){
            echo "<option value='".$row['sub_id']."'>".$row['sub_code']." ".$row['sub_desc']."";
        }
    
    ?>
  </datalist>
    </div>
    <div class="form-group">
    <table class='table table-striped' border='2'>
    <thead>
                    <th style='text-align: center;'> Equipment</th>
                    <th style='text-align: center;'> Action</th>
            </thead>
            <?php
            $sql = mysqli_query($con,"SELECT * FROM equipment")or die(mysqli_error($con));
            $num_row = mysqli_num_rows($sql);
            if($num_row > 0){
                echo "<tbody>";
                while($row = mysqli_fetch_array($sql)){
                    echo "<tr>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>"."<input type='checkbox' name='equip[]' value=".$row[0]." >"."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
            }
            ?>
    </table>
    <div class="form-group">
    <label>Request Date:</label>
        <input type="date" name="req_date" class="form-control" required>
    </div>
   
        <input type="submit" name="submit" value="Submit" class="btn btn-info">
    </form>
    <div>
    </div>
    </div>
</body>
</html>
<?php

    if(isset($_POST['submit'])){
        $req_date = $_POST['req_date'];
        $sem_id = $_SESSION['sem_id'];
        $stat = 'Pending';
        $equip_id = $_POST['equip'];
        $sub_id = $_POST['sub_id'];
        
        foreach($equip_id AS $val){
          $sql = mysqli_query($con, "INSERT INTO `request`(`req_id`, `user_id`, `sem_id`, `equip_id`, `sub_id`, `stat`, `date`) 
          VALUES (NULL,'$user_id','$sem_id','$val','$sub_id','$stat','$req_date')")or die(mysqli_error($con));
        }

       if($sql){
            echo "<script>alert('Successfully Requested')</script>";
           echo "<script>window.open('trans.php','_self')</script>"; 
        }
           
    }

?>