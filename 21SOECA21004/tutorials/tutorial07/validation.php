<?php


//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

    session_start();
    $_SESSION['uname']=$_POST['uname'];
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['age']=$_POST['age'];
    $_SESSION['dob']=$_POST['dob'];
    $_SESSION['country']=$_POST['country'];
    $_SESSION['state']=$_POST['state'];
    $_SESSION['city']=$_POST['city'];
    $_SESSION['profile']=$_POST['profile'];


    echo '<script type="text/javascript"> window.open("login.php","_self");</script>';
?>