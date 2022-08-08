<?php
$con = mysqli_connect('localhost','root','','capstone2');
$fac_id = $_GET['fac_id'];

$sql = mysqli_query($con,"DELETE FROM faculty WHERE fac_id = '$fac_id'")or die(mysqli_error($con));

echo "<script>alert('Successfully Deleted')</script>";
echo "<script>window.open('faculty.php','_self')</script>"; 
?>