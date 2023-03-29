<?php
SESSION_start();
require('connection.php');
if (isset($_POST['usernam']) and isset($_POST['pass'])){
$usernam= $_POST['usernam'];
$pass = $_POST['pass'];
$query = "SELECT * FROM `usersignup` WHERE username='$usernam' and Password='$pass'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
if ($count == 1){
if(isset($_POST['submit'])){
require('thank.php');
header('refresh:2 url=first.html');
}
}
else{
echo "<script>
alert('Invalid Login Credentials');
window.location.href='signin.php';
</script>";
}}
?>
