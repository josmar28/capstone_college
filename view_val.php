
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
					<li class="link ">
						<a href="admin_sub.php">
						<span class="fa fa-book" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Subjects</span>
						</a>
					</li>
					<li class="link">
						<a href="admin_class.php">
						<span class="fa fa-address-book-o" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Classes</span>
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
					<li class="link active">
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

       <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Your Transaction/s</h5>
								</header>
            <table class='table table-striped' border='2'>
            <thead>
               <th style='text-align: center;'> Student Number</th>
                <th style='text-align: center;'> Equipment Name</th>
                <th style='text-align: center;'> Faculty Name</th>
                <th style='text-align: center;'> Class Code</th>
                <th style='text-align: center;'> Request Date</th>
                <th style='text-align: center;'> Semester</th>
                <th style='text-align: center;'> School Year</th>
                <th style='text-align: center;'> Status</th>
                <th style='text-align: center;'> Action</th>
            </thead>
  <?php

        $qry = mysqli_query($con, "SELECT  request.req_id AS id,
                            equipment.equip_name AS equip_name,
                            faculty.fac_name AS fac_name,
                            class.class_code AS ccode,
                            request.req_date AS req_date,
                            req_equipment.stat AS stat,
							req_equipment.RE_id AS re_id,
                            semester.sem AS sem,
                            student.user_id as uid,
                            student.id_number as id_num,
                            semester.sy AS sy
                        FROM request INNER JOIN enroll ON request.enroll_id = enroll.enroll_id 
                        INNER JOIN class ON class.class_code = enroll.class_code 
                        INNER JOIN faculty ON faculty.fac_id = class.fac_id
                        INNER JOIN student ON student.stud_id = enroll.stud_id
                        INNER JOIN semester ON request.sem_id = semester.sem_id
                        INNER JOIN req_equipment ON request.req_id = req_equipment.req_id
						INNER JOIN equipment ON equipment.equip_id = req_equipment.equip_id
						WHERE req_equipment.stat = 'Finished'")or die(mysqli_error($con));
  
        $num_row = mysqli_num_rows($qry);
        if($num_row > 0){
           while($row = mysqli_fetch_array($qry)){ ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_num'] ?></td>
                        <td><?php echo $row['equip_name'] ?></td>
                        <td><?php echo $row['fac_name'] ?></td>
                        <td><?php echo $row['ccode'] ?></td>
                        <td><?php echo $row['req_date'] ?></td>
                        <td><?php echo $row['sem']?></td>
                        <td><?php echo $row['sy']?></td>
                        <td><?php echo $row['stat']?></td>
                        <td> <a href='delete_sched.php?sched_id=$row[9]'><button class='btn btn-danger'>Delete</button></a></td>
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