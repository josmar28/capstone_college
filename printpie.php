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
@media print {
  #printPageButton {
    display: none;
  }
}
</style>
<body onload="myFunction()">
	<div class="container-fluid display-table">
		<div class="row display-table-row">
        <button id="printPageButton" onClick="window.print();" class="btn btn-info">Print Now!</button>
        <a href="pie.php" id="printPageButton"><button class="btn btn-success" id="printPageButton">Back</button></a>
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