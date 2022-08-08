<?php
  $con = mysqli_connect('localhost','root','','capstone2');
$user_id = $_GET['user_id'];

$acc = mysqli_query($con, "DELETE FROM user where user_id = '$user_id'");
$stud = mysqli_query($con, "DELETE FROM student where user_id = '$user_id'");
echo "<script>alert('Successfully Deleted')</script>";
echo "<script>window.open('admin.php','_self')</script>";


?>