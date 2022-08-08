
<?php
session_start();
$con = mysqli_connect('localhost','root','','capstone2');
if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = mysqli_query($con, "SELECT * FROM semester where status = 'active' ")or die(mysqli_error($con));
        $row = mysqli_fetch_array($sql);
        $_SESSION['sem_id'] = $row['sem_id']; 

        $qry = mysqli_query($con, "SELECT * FROM user WHERE password = '$password' and username = '$username' ");
        $num_rows = mysqli_num_rows($qry);
        $row = mysqli_fetch_array($qry);
        if($row > 0){
            if($row['user_type'] == 'admin'){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_type'] = $row['user_type'];
                echo "<script>window.open('admindash.php','_self')</script>";
            }
            else if($row['user_type'] == 'student'){
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_type'] = $row['user_type'];
                echo "<script>window.open('studentpage.php','_self')</script>";
            }
            else if($row['user_type'] == 'wolar'){
                $_SESSION['user_id'] = $row['user_id'];  
                $_SESSION['user_type'] = $row['user_type'];
               echo "<script>window.open('wolarpage.php','_self')</script>";
            }
            else if($row['user_type'] == 'ict'){
                $_SESSION['user_id'] = $row['user_id'];  
                $_SESSION['user_type'] = $row['user_type'];
               echo "<script>window.open('ictpage.php','_self')</script>";
            }
        }
        else {
            echo "<script>alert('Invalid login, please check your username and password')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
}   