<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"website");
$username=$_POST['fullname'];
$password=$_POST['password'];
$s="select * from user_information where fullname='$username' && password='$password'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$username;
    header('Refresh:1; url=Website.html');
    echo '<script> alert("Welcome to my website");</script>';
}
else{
    header('location:Sign-In.php');
    echo 'Username Not Available';
}
?>
