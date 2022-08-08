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
     
    <h2 class="form-signin-heading">Create account <a href="admin.php"> <input type="submit" name="back" value="Back" class="btn btn-success" style="float:right;"></a></h2> <hr/>
       <form class="form-signin" method="post" action = '#'>
      
        <div class="form-group">
		ID Number:
        <input type="text" class="form-control" placeholder="ID Number" name="id_num" required  />
        </div>
        
		<div class="form-group">
		Password:
        <input type="password" class="form-control" placeholder="Password" name="pass" required  />
        </div>
		
		<div class="form-group">
		First Name:
        <input type="text" class="form-control" placeholder="Firstname" name="fname" required  />
        </div>
		
		<div class="form-group">
		Middle Name:
        <input type="text" class="form-control" placeholder="Middlename" name="mname" required  />
        </div>
		
		<div class="form-group">
		Last Name:
        <input type="text" class="form-control" placeholder="Lastname" name="lname" required  />
        </div>
		
		<div class="form-group">
		Gender:
        <input type="radio" name="gender" value="male"  required>Male
        <input type="radio" name="gender" value="female"  required>Female
        </div>
        
		<div class="form-group">
		Account Type:
        <select name="acc_type">
            <option value="" disable selected style="display:none;">-select-</option>
            <option value="student">Student</option>
            <option value="wolar">Wolar</option>

        </select>
        </div>

		<div class="form-group">
		Course:
        <input type="text" class="form-control" placeholder="Course" name="crs" required  />
        </div>
		
		<div class="form-group">
		Year Level:
        <select name="year">
                <option value="" disable selected style="display:none;">-select-</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
        </select>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>
</div>
</div>
</div>
</body>
</html> 


<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$sem_id = $_SESSION['sem_id'];
if(isset($_POST['submit'])){
 
    $id_num = $_POST['id_num']; 
    $pass = $_POST['pass'];
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $college = 'CCS';
    $gender = $_POST['gender'];
    $crs = $_POST['crs'];
    $year = $_POST['year'];
    $acc_type = $_POST['acc_type'];
    $id_num2 = "wolar".$id_num;

    $qry = mysqli_query($con, "SELECT * FROM user where username = '$id_num'");
    $num_row = mysqli_num_rows($qry);
    if($num_row > 0){
        echo "<script>alert('Username is already used')</script>";
        echo "<script>window.open('admin_reg.php','_self')</script>";

    }
    else{
        if($acc_type == 'student'){
            $acc = mysqli_query($con, "INSERT INTO `user`(`user_id`, `username`, `password`, `user_type`) VALUES (NULL,'$id_num','$pass','student')")or die(mysqli_error($con));
            $_SESSION['user_id'] = mysqli_insert_id($con);
            $user_id = $_SESSION['user_id']; 
    
            $stud = mysqli_query($con, "INSERT INTO `student`(`stud_id`, `user_id`, `sem_id`, `id_number`, `fname`, `mname`, `lname`, `gender`, `crs`, `year`) 
            VALUES (NULL,'$user_id','$sem_id','$id_num','$fname','$mname','$lname','$gender','$crs','$year')")or die(mysqli_error($con));
        if ($acc && $stud == true){
            echo "<script>alert('Successfully Registered')</script>";
            echo "<script>window.open('admin.php','_self')</script>"; 
        }
        else{
            return false;
        }
     }else if($acc_type == 'wolar'){
        $acc = mysqli_query($con, "INSERT INTO `user`(`user_id`, `username`, `password`, `user_type`) VALUES (NULL,'$id_num','$pass','student')")or die(mysqli_error($con));
        $_SESSION['user_id'] = mysqli_insert_id($con);
        $user_id = $_SESSION['user_id'];

        $stud = mysqli_query($con, "INSERT INTO `student`(`stud_id`, `user_id`, `sem_id`, `id_number`, `fname`, `mname`, `lname`, `gender`, `crs`, `year`) 
        VALUES (NULL,'$user_id','$sem_id','$id_num','$fname','$mname','$lname','$gender','$crs','$year')")or die(mysqli_error($con));

        $acc1 = mysqli_query($con, "INSERT INTO `user`(`user_id`, `username`, `password`, `user_type`) VALUES (NULL,'$id_num2','$pass','wolar')")or die(mysqli_error($con));
        $_SESSION['user_id'] = mysqli_insert_id($con);
        $user_id1 = $_SESSION['user_id'];

        $stud1 = mysqli_query($con, "INSERT INTO `student`(`stud_id`, `user_id`, `sem_id`, `id_number`, `fname`, `mname`, `lname`, `gender`, `crs`, `year`) 
        VALUES (NULL,'$user_id1','$sem_id','$id_num2','$fname','$mname','$lname','$gender','$crs','$year')")or die(mysqli_error($con));

        if ($acc && $stud && $acc1 && $stud1 == true){
            echo "<script>alert('Successfully Registered')</script>";
            echo "<script>window.open('admin.php','_self')</script>"; 
        }
        else{
            return false;
        }

     }
    }
}
