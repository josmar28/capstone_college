<?php
session_start();
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
					<li class="link active">
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
        <a href="add_sub.php"><button class="btn btn-success">Add Subject</button></a>  <a href="admin_sub.php"><button class="btn btn-success">Back</button></a>
        <br>
            <br>
        <form action = "search.php" method="POST">
        <input type="text" name="input" placeholder = "Search..."> <input type="submit" name="search" placeholder = "Button" class="btn btn-success">
        </form>
        <br>
        <table class='table table-striped' border='1'>
        <thead>
					<th style='text-align: center;'> Faculty Name</th>
                    <th style='text-align: center;'> Subject Code</th>
                    <th style='text-align: center;'> Subject Name</th>
                    <th style='text-align: center;'> Subject Description</th>
					<th style='text-align: center;'> Time</th>
                    <th style='text-align: center;'> Day</th>
                    <th style='text-align: center;'> Units</th>
                    <th style='text-align: center;'> Action</th>
        </thead>
        <?php
        if(isset($_POST['search'])){
			$input = $_POST['input'];
			$con = mysqli_connect('localhost','root','','capstone2');
			$qry = mysqli_query($con, "SELECT  subject.sub_code AS code,
									subject.sub_name AS name,
									subject.sub_desc AS sub_desc,
									subject.time AS time,
									subject.units AS unit,
									subject.day AS day,
									faculty.fac_name
									FROM subject INNER JOIN faculty ON subject.fac_id = faculty.fac_id
									where subject.sub_code = '$input'")or die(mysqli_error($con));
			$num_row = mysqli_num_rows($qry);
			if ($num_row > 0){
				echo "<tbody>";
				while($row = mysqli_fetch_array($qry)){
					echo "<tr>";
					echo "<td>".$row['fac_name']."</td>";
					echo "<td>".$row['code']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['sub_desc']."</td>";
					echo "<td>".$row['time']."</td>";
					echo "<td>".$row['day']."</td>";
					echo "<td>".$row['unit']."</td>";
					echo "<td>"."<a href='edit_sub.php?sub_id=$row[0]'><button class='btn btn-info'>Edit Subject</button></a><a href='delete_sub.php?sub_id=$row[0]'><button class='btn btn-danger'>Delete Subject</button></a>"."</td>";
					echo "</tr>";
					echo "</tbody>";
			}
		}
}
        ?>

        </div>
    </div>
    
</body>
</html>