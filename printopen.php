<?php
$con = mysqli_connect('localhost','root','','capstone2');

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIT'")or die(mysqli_error($con));
$bsit = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSIS'")or die(mysqli_error($con));
$bsis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BSCS'")or die(mysqli_error($con));
$bscs = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'MMA'")or die(mysqli_error($con));
$mma = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id != '9' AND  equipment.equip_id != '8' AND student.crs= 'BLIS'")or die(mysqli_error($con));
$blis = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSIT'")or die(mysqli_error($con));
$bsit1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND  student.crs= 'BSIS'")or die(mysqli_error($con));
$bsis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BSCS'")or die(mysqli_error($con));
$bscs1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'MMA'")or die(mysqli_error($con));
$mma1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '8' AND student.crs= 'BLIS'")or die(mysqli_error($con));
$blis1 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSIT'")or die(mysqli_error($con));
$bsit2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND  student.crs= 'BSIS'")or die(mysqli_error($con));
$bsis2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BSCS'")or die(mysqli_error($con));
$bscs2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT  equipment.equip_name AS equip_name,
subject.sub_code AS ccode,
request.date AS date,
request.stat AS stat,
semester.sem AS sem,
student.id_number as uid,
semester.sy AS sy
FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
INNER JOIN semester ON semester.sem_id = request.sem_id 
INNER JOIN equipment ON equipment.equip_id = request.equip_id
INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'MMA'")or die(mysqli_error($con));
$mma2 = mysqli_num_rows($qry);

$qry = mysqli_query($con, "SELECT equipment.equip_name AS equip_name,
					subject.sub_code AS ccode,
					request.date AS date,
					request.stat AS stat,
					semester.sem AS sem,
					student.id_number as uid,
					semester.sy AS sy
					FROM request INNER JOIN subject ON subject.sub_id = request.req_id 
					INNER JOIN semester ON semester.sem_id = request.sem_id 
					INNER JOIN equipment ON equipment.equip_id = request.equip_id
					INNER JOIN student ON student.user_id = request.user_id
                            Where equipment.equip_id = '9' AND student.crs= 'BLIS'")or die(mysqli_error($con));
$blis2 = mysqli_num_rows($qry);



$dataPoints = array(
	array("label"=>"BSIT", "y"=>$bsit1),
    array("label"=>"BSCS", "y"=>$bscs1),
    array("label"=>"BSIS", "y"=>$bsis1),
    array("label"=>"MMA", "y"=>$mma1),
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
@media print {
  #printPageButton {
    display: none;
  }
}
</style>
<body>
	<div class="container-fluid display-table">
		<div class="row display-table-row">       
                <button id="printPageButton" onClick="window.print();" class="btn btn-info">Print Now!</button>
        <a href="open.php" id="printPageButton"><button class="btn btn-success" id="printPageButton">Back</button></a>
 <table class='table table-striped'  style="text-align:center;" border='2'>
 <thead>
  
</thead>
<tbody>
    <tr>
        <th id="par" class="span" colspan="5" scope="colgroup"  style="text-align:center;">
            Summary of Laboratory Facilities Utilization
        </th>
    </tr>
    <tr>
        <th id="sy" class="span" colspan="5" scope="colgroup"  style="text-align:center;">
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
       

    </tr>
    <tr>
        <th headers="par" id="pbed2">
           Open Laboratory
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

    </tr>

    <tr>
        <th id="rbed1" headers="rome">
          Printers
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


    </tr>

</tbody>
               
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Open Laboratory Computer Usage"
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