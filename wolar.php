<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$user_id = $_SESSION['user_id'];
$sql = mysqli_query($con,"SELECT * FROM student where user_id = '$user_id'");
$num_row = mysqli_num_rows($sql);

if($num_row > 0){
    while($row = mysqli_fetch_array($sql)){
        $fname = $row['fname'];
        $lname = $row['lname'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="image/ndu_seal.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="image/ndu_seal.png">
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/default2.css">
    <link rel="icon" type="image/png" href="image/ndu_seal.png">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/admin.css"/>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Notre Dame University</title> 
</head>
<style>
.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  } 
}  

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<body>
    <div class="header">
     <div class="topnav" id="myTopnav">
        <div class="col-md-9">
                <a href="wolarpage.php"> <img src="image/ndu_seal.png"></a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                <a href="wolar.php"><span class="fa fa-calendar"></span> Borrowing</a>
                <a href="wolar_trans.php"><span class="glyphicon  glyphicon-tasks"></span> Transactions</a>
    
            
                </div>
                <div class="col-md-3" style="margin-top:18px;">
                <a href="#"><span class="fa fa-user"></span> Welcome: Wolar</a>
                <a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a>

         </div>
        </div>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
        <br>

       <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Your Transaction/s</h5>
								</header>
            <table class='table table-striped' border='2'>
            <thead>
            <th style='text-align: center;'> Student Number</th>
            <th style='text-align: center;'> Student Name</th>
                <th style='text-align: center;'> Equipment Name</th>
                <th style='text-align: center;'> Class Code</th>
                <th style='text-align: center;'> Request Date</th>
                <th style='text-align: center;'> Semester</th>
                <th style='text-align: center;'> School Year</th>
                <th style='text-align: center;'> Status</th>
                <th style='text-align: center;'> Action</th>
            </thead>
  <?php

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
                      request.req_id as req_id,
                      subject.sub_code AS ccode,
                      request.date AS date,
                      request.stat AS stat,
                      semester.sem AS sem,
                      student.id_number as uid,
                      student.fname as fname,
                      student.lname as lname,
                      semester.sy AS sy
                      FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
                      INNER JOIN semester ON semester.sem_id = request.sem_id 
                      INNER JOIN equipment ON equipment.equip_id = request.equip_id
                      INNER JOIN student ON student.user_id = request.user_id
                      WHERE stat = 'approved'")or die(mysqli_error($con));
        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){
           while($row = mysqli_fetch_array($qry)){ ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['uid'] ?></td>
                    <td><?php echo $row['fname'] ?> <?php echo $row['lname'] ?></td>
                        <td><?php echo $row['equip_name'] ?></td>
                        <td><?php echo $row['ccode'] ?></td>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['sem']?></td>
                        <td><?php echo $row['sy']?></td>
                        <td><?php echo $row['stat']?></td>
                        <td><a href="wolar_app.php?req_id=<?php echo $row['req_id']?>"><button class='btn btn-info'>Done</button></a></td>
                    </tr>
                </tbody>
    <?php   }
        } 
        else {
            echo "<script>alert('NO DATA')</script>";

        }                        
    ?>
        </div>
    </div>
    </div>
    
</body>
</html>