<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
$sub_id = $_GET['sub_id'];

$qry = mysqli_query($con, "DELETE FROM subject WHERE sub_id = '$sub_id'");
        echo "<script>alert('Successfully Deleted')</script>";
        echo "<script>window.open('admin_sub.php','_self')</script>";
?>