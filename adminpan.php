<?php
include("dbconfig.php");
if(isset($_POST['postnotice']))
{
	$notice=$_POST['noticepost'];
	$date=$_POST['dateof'];
	$result=mysqli_query($conn,"insert into admininfo values('$notice','$date')");
	if($result)
		echo  " <script> alert('Notice posted successfully')</script>";
	else
		echo "<script> alert('There was an error while posting the notice'</script>";
}
?>
