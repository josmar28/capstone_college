<?php
  $con = mysqli_connect('localhost','root','','capstone2');
$class_id = $_GET['class_id'];

$acc = mysqli_query($con, "DELETE FROM class WHERE class_id = '$class_id'");

echo "<script>alert('Done')</script>";
echo "<script>window.open('class.php','_self')</script>";


?>