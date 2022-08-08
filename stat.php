<?php
$con = mysqli_connect('localhost','root','','capstone2');

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND  student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSIT' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsit2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND  student.crs= 'BSIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bsis2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSCS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$bscs2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request left JOIN subject ON subject.sub_id = request.req_id 
left JOIN semester ON semester.sem_id = request.sem_id 
left JOIN equipment ON equipment.equip_id = request.equip_id
left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'MMA' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$mma2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT equipment.equip_name AS equip_name,
					subject.sub_code AS ccode,
					request.date AS date,
					request.stat AS stat,
					semester.sem AS sem,
					student.id_number as uid,
					semester.sy AS sy
					FROM request left JOIN subject ON subject.sub_id = request.req_id 
					left JOIN semester ON semester.sem_id = request.sem_id 
					left JOIN equipment ON equipment.equip_id = request.equip_id
					left JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BLIS' AND request.stat != 'Disapproved' AND request.stat != 'Pending'")or die(mysqli_error($con));
$blis2 = mysqli_num_rows($qry);


$dataPoints = array(
	array("label"=>"BSIT", "y"=>$bsit),
    array("label"=>"BSCS", "y"=>$bscs),
    array("label"=>"BSIS", "y"=>$bsis),
    array("label"=>"MMA", "y"=>$mma),
    array("label"=>"BLIS", "y"=>$blis),
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
							<a href="faculty.php">
							<span class="fa fa-users" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Faculty</span>
							</a>
						</li>
						<li class="link">
							<a href="equipment.php">
							<span class="fa fa-angle-double-right" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Equipments</span>
							</a>
						</li>
						<li class="link active"> 	
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
               
                <a href="printstat.php"><button class="btn btn-success">Print</button><a/>
                <a href="open.php"><button class="btn btn-info">Next Chart</button></a>
            <?php //	<a href="pie.php"><button  class="btn btn-default">Back</button></a> ?>
                <div class="row">
						<div class="col-md-12">
							<div class="admin-content-con">
								<header class="clearfix">
									<h5>Admin Pie Chart Information</h5>	
								</header>

 <table class='table table-striped'  style="text-align:center;" border='2'>
 <thead>
  
</thead>
<tbody>
    <tr>
        <th id="par" class="span" colspan="6" scope="colgroup"  style="text-align:center;">
            Summary of Laboratory Facilities Utilization
        </th>
    </tr>
    <tr>
        <th id="sy" class="span" colspan="6" scope="colgroup"  style="text-align:center;">
           SY 2018-2019
        </th>
    </tr>
    <tr>
        <th headers="par" id="pbed1">
         
        </th>
        <td headers="par pbed1 stud">
            BSIT
        </td>
        <td headers="par pbed1 apt">
            BSIS
        </td>
        <td headers="par pbed1 chal">
            BSCS
        </td>
        <td headers="par pbed1 chal">
            MMA
        </td>
        <td headers="par pbed1 chal">
            BLIS
        </td>

    </tr>
    <tr>
    <th headers="par" id="pbed2">
           Open Computer Laboratory
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit2?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma2?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis2?>
        </td>

    </tr>
    <tr>
        <th headers="par" id="pbed3">
           IT & Network Laboratory
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis?>
        </td>

    </tr>

    <tr>
        <th id="rbed1" headers="rome">
          Printers
        </th>
        <td headers="par pbed2 stud">
            <?php echo $bsit1?>
        </td>
        <td headers="par pbed2 apt">
        <?php echo $bsis1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $bscs1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $mma1?>
        </td>
        <td headers="par pbed2 chal">
        <?php echo $blis1?>
        </td>


    </tr>

</tbody>
               
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "IT & Network Laboratory Usage"
	},
	subtitles: [{
		text: "School Year: 2018 - 2019"
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
</body>
</html> 