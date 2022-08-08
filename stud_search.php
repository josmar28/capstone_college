<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$ccode = $_SESSION['ccode'];
if(isset($_POST['submit'])){
    $stud_id = $_POST['stud'];
    
    foreach($stud_id AS $val){
        $sql = mysqli_query($con,"INSERT INTO `enroll`(`enroll_id`, `stud_id`, `class_code`) 
            VALUES (NULL,'$val','$ccode')")or die(mysqli_error($con));
    
    }
    if($sql){
        echo "<script>alert('Successfully Added')</script>";
        echo "<script>window.open('admin_class.php','_self')</script>";
    }
    
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRATOR</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/default.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css1/css/admin.css"/>
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row">
			
			<div class="col-md-2 display-table-cell valign-top" id="side-menu">
				<h1 class="hidden-sm hidden-xs">Admin<span>Panel</span></h1>
				<ul>
					<li class="link">
						<a href="admindash.php"">
						<span class="fa fa-dashboard" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Dashboard</span>
						</a>
					</li>
					
					<li class="link">
						<a href="admin.php" data-toggle="collapse" aria-controls="college">
						<span class="fa fa-users" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Students</span>
						</a>
						<ul class="collapse collapseable" id="college">
							<li><a href="#">CCS</a></li>
							<li><a href="#">CBA</a></li>
							<li><a href="#">CAS</a></li>
							<li><a href="#">CHS</a></li>
							<li><a href="#">CEN</a></li>
							<li><a href="#">CED</a></li>
						</ul>
					</li>
					<li class="link">
						<a href="admin_bor.php" data-toggle="collapse" aria-controls="events">
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Borrowing</span>
						</a>
						<ul class="collapse collapseable" id="events">
							<li><a href="#">Sports</a></li>
							<li><a href="#">Academic</a></li>
							<li><a href="#">Socio-Cultural</a></li>
							<li><a href="#">Pageant</a></li>
							<li><a href="#">Pinoygames</a></li>
						</ul>
					</li>
					
					<li class="link">
						<a href="admin_sub.php">
						<span class="fa fa-book" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Subjects</span>
						</a>
					</li>
					<li class="link active">
						<a href="admin_class.php">
						<span class="fa fa-address-book-o" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Classes</span>
						</a>
					</li>
					<li class="link">
						<a href="view_val.php">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Validations</span>
						</a>
					</li>
					<li class="link"> 	
						<a href="pie.php">
						<span class="fa fa-puzzle-piece" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Statistical Report</span>
						</a>
					</li>
				</ul>
			</div>
			
			<div class="col-md-10 display-table-cell valign-top box">
				<div class="row">
					<header id="nav-header" class="clearfix">
						<div class="col-md-5 search">
							<a href="">Students</a>
						</div>
						<div class="col-md-7">
							<ul class="pull-right">
								<li class="welcome hidden-sm hidden-xs"><strong>Welcome to Administration Area</strong></li>
								<li>
									<a href="#"><span class="fa fa-envelope" aria-hidden="true"></span>
									<span class="label label-warning">0</span></a>
								</li>
								<li>
								<a href="logout.php" class="logout">
								<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
								Logout</a>
								</li>
							</ul>
						</div>
					</header>
				</div>
			
            <a href="admin_reg.php"><button class="btn btn-success">Add User</button></a>
            <br>
            <br>
            <form action = "#" method="POST">
        <input type="text" name="input" placeholder = "Search..."> <input type="submit" name="search" placeholder = "Button" class="btn btn-success">
        </form>
        <div class="row">
        <form action = "#" method="POST">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Admin Student Information</h5>
									
								</header>
                                <table class='table table-striped' border='2'>
        <thead>
                    <th style='text-align: center;'> ID NUMBER</th>
                    <th style='text-align: center;'> GENDER</th>
                    <th style='text-align: center;'> FIRSTNAME</th>
                    <th style='text-align: center;'> MIDDLENAME</th>
                    <th style='text-align: center;'> LASTNAME</th>
                    <th style='text-align: center;'> COURSE</th>
                    <th style='text-align: center;'> YEAR</th>
                    <th style='text-align: center;'> SEMESTER</th>
                    <th style='text-align: center;'> S/Y</th>
                    <th style='text-align: center;'> ACTION</th>
        </thead>
        <?php
        if(isset($_POST['search'])){
            $input = $_POST['input'];
        $con = mysqli_connect('localhost','root','','capstone2');
        $qry = mysqli_query($con, "SELECT student.stud_id as stud_id,
                            student.id_number AS id,
                            user.user_type AS type,    
                            student.user_id AS userid,
                            student.gender AS gender,
                            student.fname AS fname,
                            student.mname AS mname,
                            student.lname AS lname,
                            student.crs AS crs,
                            student.year AS yr,
                            student.sem AS sem,
                            student.sy AS sy
                        FROM user INNER JOIN student ON student.user_id = user.user_id
                        WHERE student.id_number = '$input'")or die(mysqli_error($con));
        $num_row = mysqli_num_rows($qry);
        if ($num_row > 0){
            while($row = mysqli_fetch_array($qry)){
				echo "<tbody>";
                echo "<tr>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "<td>".$row[8]."</td>";
                echo "<td>".$row[9]."</td>";
                echo "<td>".$row[10]."</td>";
                echo "<td>".$row[11]."</td>";
                echo "<td>"."<input type='checkbox' name='stud[]' value=".$row[0]." >"."</td>";
                echo "</tr>";
				echo "</tbody>";
        }
    }
}
        ?>
								</table>
                                <button name="submit" style="float:right" class="btn btn-info">Submit</button>
							</div>
						</div>
					</div>
                    </form>
				</div>
</body>
</html>