<?php
session_start();
if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$remember=isset($_POST['remember'])?true:false;
if(($uname=='jemini')&&($pass=='123456'))
{    
    if($remember)
    {
    setcookie("uname",$uname,time()+120);
    setcookie("pass",$pass,time()+120);
    
    }
    else
    {   
    setcookie("uname",$uname,time());
    setcookie("pass",$pass,time());
    } 
$_SESSION["uname"]=$uname;

header('location:index.php');
}
else
{
    header('location:login.php');   
}
}
?>