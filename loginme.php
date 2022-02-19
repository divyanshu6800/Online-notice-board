<?php
include("dbconfig.php");
session_start();
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['pass'];
$_SESSION['email']=$email;
$_SESSION['pass']=$password;
$email_result=mysqli_query($conn,"select 'email' from noticeusers where email='$email' AND pass='$password'"); 
$user_match=mysqli_num_rows($email_result);
if($user_match>0)
{
	if($email=="admin@gmail.com" && $password="admin123")
		header("location:adminpanel.php");
	else
		header("location:userpanel.php");
}
else
{
	
	echo "<script> alert('Invalid USERNAME or PASSWORD')</script>";
}
}
?>

	
	