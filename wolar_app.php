<?php
$con = mysqli_connect("localhost","root","","capstone2");

$req_id = $_GET['req_id'];

$sql = mysqli_query($con,"UPDATE `request` SET `stat`='Done' WHERE req_id = '$req_id'")or die(mysqli_error($con));
echo "<script>alert('Successfully Approved')</script>";
echo "<script>window.open('wolar.php','_self')</script>";
?>