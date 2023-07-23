<?php
    session_start();
    $con = mysqli_connect('localhost','root','website');
    mysqli_select_db($con,"website"); 
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $s = "select * from user_information where fullname = '$fullname' or email='$email' or password='$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num>= 1){
        header('Refresh:1; url=Sign-In.php');
        echo '<script>alert("The Account Is Already Available!")</script>';
    }
    else{
        $reg = "insert into user_information (fullname,email,password) values ('$fullname','$email','$password')";
        mysqli_query($con, $reg);
        $_SESSION['username'] = $username;
        header('Refresh:2; url=Home.php');
        echo '<script>alert("Registration Successful !")</script>';
    }
?>
