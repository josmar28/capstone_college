
<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
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
						<a href="admindash.php">
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
					<li class="link active">
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
					<li class="link ">
						<a href="admin_sub.php">
						<span class="fa fa-book" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Subjects</span>
						</a>
					</li>
					<li class="link">
						<a href="faculty.php" data-toggle="collapse" aria-controls="college">
						<span class="fa fa-users" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Faculty</span>
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
						<a href="equipment.php" data-toggle="collapse" aria-controls="events">
						<span class="fa fa-angle-double-right" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Equipments</span>
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
						<a href="stat.php">
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
							<a href="">Borrowing</a>
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

       <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Your Transaction/s</h5>
								</header>
								<form action = "bor_search.php" method="POST">
        <input type="text" name="input" placeholder = "Search..."> <input type="submit" name="search" placeholder = "Button" class="btn btn-success">
        </form>
		<br>
		<br>
            <table class='table table-striped' border='2'>
            <thead>
               <th style='text-align: center;'> Student Number</th>
			   <th style='text-align: center;'> Student Name</th>
                <th style='text-align: center;'> Equipment Name</th>
                <th style='text-align: center;'> Subject Code</th>
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
					FROM request INNER JOIN subject ON subject.sub_id = request.sub_id 
					INNER JOIN semester ON semester.sem_id = request.sem_id 
					INNER JOIN equipment ON equipment.equip_id = request.equip_id
					INNER JOIN student ON student.user_id = request.user_id
					WHERE stat = 'pending' AND stat != 'done'")or die(mysqli_error($con));
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
                        <td><a href="admin_app.php?req_id=<?php echo $row['req_id']?>"><button class='btn btn-info'>Approved</button></a> <a href='dis_sched.php?req_id=<?php echo $row['req_id']?>'><button class='btn btn-danger'>Disapproved</button></a></td>
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