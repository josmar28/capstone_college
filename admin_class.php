<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
					<li class="link ">
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
							<a href="">Subjects</a>
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

        <div>
        <a href="admin_sub.php"><button class="btn btn-success" style="margin-top:10px;">Add Class</button></a>
        <br>
            <br>
        <form action = "search.php" method="POST">
        <input type="text" name="input" placeholder = "Search..."> <input type="submit" name="search" placeholder = "Button" class="btn btn-success">
        </form>
        <br>
        <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Admin Subjects Information</h5>
								</header>
        <table class='table table-striped' border='2'>
        <thead>
                    <th style='text-align: center;'> Class Code</th>
                    <th style='text-align: center;'> Subject Code</th>
                    <th style='text-align: center;'> Faculty</th>
                    <th style='text-align: center;'> Start Time</th>
                    <th style='text-align: center;'> End Time</th>
                    <th style='text-align: center;'> Room</th>
                    <th style='text-align: center;'> Day</th>
                    <th style='text-align: center;'> Semester</th>
                    <th style='text-align: center;'> School Year</th>
                    <th style='text-align: center;'> Action</th>
        </thead>
        <?php
    
        $con = mysqli_connect('localhost','root','','capstone2');
        $qry = mysqli_query($con, "SELECT  class.class_id AS id,
                        class.class_code as ccode,
                         class.subject_code AS scode,   
                        class.start_time AS start,
                        class.end_time AS end,
                        class.room AS room,
                        class.day AS day,
                        faculty.fac_name AS fac_name,
                        semester.sem AS sem,
                        semester.sy AS sy
                          FROM class INNER JOIN faculty ON class.fac_id = faculty.fac_id
                               INNER JOIN semester ON class.sem_id = semester.sem_id");
        $num_row = mysqli_num_rows($qry);
        if ($num_row > 0){
            echo "<tbody>";
            while($row = mysqli_fetch_array($qry)){
                echo "<tr>";
                echo "<td>".$row['ccode']."</td>";
                echo "<td>".$row['scode']."</td>";
                echo "<td>".$row['fac_name']."</td>";
                echo "<td>".$row['start']."</td>";
                echo "<td>".$row['end']."</td>";
                echo "<td>".$row['room']."</td>";
                echo "<td>".$row['day']."</td>";
                echo "<td>".$row['sem']."</td>";
                echo "<td>".$row['sy']."</td>";
                echo "<td>"."<a href='edit_class.php?class_id=$row[0]'><button class='btn btn-info'>Edit Class</button></a><a href='delete_class.php?class_id=$row[0]'><button class='btn btn-danger'>Delete Class</button></a>"."</td>";
                echo "</tr>";
                echo "</tbody>";
        }
    }
        ?>

</div>
						</div>
					</div>
				</div>
    </table>
    
</body>
</html>