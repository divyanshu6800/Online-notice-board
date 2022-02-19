<?php
include("dbconfig.php");
if(isset($_POST['confirm'])){
	$date=$_POST['deletedate'];
	
$result=mysqli_query($conn,"DELETE 'content' from admininfo where 'dateof'='$date'");
if($result)
	echo "<script> alert('All the notices of the selected date were deleted')</script>";
else
	echo "<script> alert('Notice was not deleted')</script>";
}
?>
		