<?php
$con = mysqli_connect('localhost','root','','capstone2');
$equip_id = $_GET['equip_id'];

$sql = mysqli_query($con,"DELETE FROM equipment WHERE equip_id = '$equip_id'")or die(mysqli_error($con));

echo "<script>alert('Successfully Deleted')</script>";
echo "<script>window.open('equipment.php','_self')</script>"; 
?>