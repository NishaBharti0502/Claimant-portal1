<?php
SESSION_start();
require('connection.php');
if(isset($_GET['token'])){
($token=$_GET['token']);
$updatequery="
UPDATE usersignup
SET status = 'active'
WHERE token= '$token'";
$query=mysqli_query($conn,$updatequery);
if($query){
if(isset($_SESSION['msg']))
{$_SESSION['msg']='Account updated successfully, now you can signin..';}
header('location:signin.php');}
else{$_SESSION['msg']='Account not updated';
header('location:signup.php');}
}