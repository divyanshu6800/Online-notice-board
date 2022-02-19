<?php
include("dbconfig.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['pass'];
$city=$_POST['city'];
$email_result=mysqli_query($conn,"select 'email' from noticeusers where email='$email'"); 
$user_match=mysqli_num_rows($email_result);
if($user_match>0)
{
	
	echo "<script> alert('Account already exists with the given username')</script>";
}
else
{
	$result=mysqli_query($conn, "insert into noticeusers values('$name','$dob','$email','$gender','$city','$password')");
	if($result)
	{		
	echo "<script> alert('Account was successfully created')</script>";
	}
	else
	{
		echo "<script> alert('Account creation unsuccessful')</script>";	
	}
}
}
?>

	
	