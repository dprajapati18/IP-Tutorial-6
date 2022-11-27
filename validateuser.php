<?php
session_start();
$username= isset($_POST['username'])?$_POST['username']:"";
$password= isset($_POST['password'])?$_POST['password']:"";

if($username=='admin@gmail.com' && $password=='123456789')
{
    $_SESSION['data']=50;
    header("location:index.php");

}else{
    header("location:login.php");
}
?>
