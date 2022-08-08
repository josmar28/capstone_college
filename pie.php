<?php

$con = mysqli_connect('localhost','root','','capstone2');

$sql = mysqli_query($con, "SELECT * FROM class where room = 'CLAB1'");
$clab1 = mysqli_num_rows($sql);
$sql = mysqli_query($con, "SELECT * FROM class where room = 'CLAB2'");
$clab2 = mysqli_num_rows($sql);
$sql = mysqli_query($con, "SELECT * FROM class where room = 'CLAB3'");
$clab3 = mysqli_num_rows($sql);
$sql = mysqli_query($con, "SELECT * FROM class where room = 'CLAB4'");
$clab4 = mysqli_num_rows($sql);
$sql = mysqli_query($con, "SELECT * FROM class where room = 'CLAB5'");
$clab5 = mysqli_num_rows($sql);
$dataPoints = array( 
	array("label"=>"CLAB1", "y"=>$clab1),
    array("label"=>"CLAB2", "y"=>$clab2),
    array("label"=>"CLAB3", "y"=>$clab3),
	array("label"=>"CLAB4", "y"=>$clab4),
	array("label"=>"CLAB5", "y"=>$clab5),
)
 
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
<style>
</style>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row" id="hide">
			
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
						<a href="admin_schedv.php">
						<span class="fa fa-address-book-o" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Schedule</span>
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
						<a href="view_val.php">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<span class="hidden-sm hidden-xs">Validations</span>
						</a>
					</li>
					<li class="link active"> 	
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
							<a href="">Statistical Report</a>
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
                <br>
				<a href="printpie.php"> <button class="btn btn-success">Print</button></a>
                <a href="stat.php"><button class="btn btn-info">Next Chart</button></a>
               
                <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Admin Pie Chart Information</h5>	
								</header>
                              
 <table align="center" class='table table-striped'   style="text-align:center;" border='2'>
            <thead>
                <th style='text-align: center;'></th>
                <th style='text-align: center;'> SY 2018-2019</th>
            </thead>
                    <tr>
                    <td>CLAB1</td>
                    <td><?php echo $clab1?></td>
                    </tr>
                    <tr>
                    <td>CLAB2</td>
                    <td><?php echo $clab2?></td>
                    </tr>
                    <tr>
                    <td>CLAB3</td>
                    <td><?php echo $clab3?></td>
                    </tr>
                    <tr>
                    <td>CLAB4</td>
                    <td><?php echo $clab4?></td>
                    </tr>
                    <tr>
                    <td>CLAB5</td>
                    <td><?php echo $clab5?></td>
                    </tr>
                </tbody>
             

</body>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div> 
<script>
window.onload = function() {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Statistical Chart for Computer Laboratory Usage"
	},
	subtitles: [{
		text: "January 2018 - 2019"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>
</html> 