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
                <a href="studentpage.php"> <img src="image/ndu_seal.png"></a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                <a href="trans.php"><span class="glyphicon  glyphicon-tasks"></span> Transactions</a>
                <a href="edit_acc.php"><span class="fa fa-user"></span> My Account</a>
            
                </div>
                <div class="col-md-3" style="margin-top:18px;">
                <a href="#"><span class="fa fa-user"></span> Welcome: <?php echo $fname;?> <?php echo $lname;?></a>
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

    
</body>
</html>