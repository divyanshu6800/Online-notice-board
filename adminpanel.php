<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
	<link href="css1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="skytry.jpg"><center>
<img src="header.jpg" width="65%"> 
<br><br>
<h1>Admin Panel</h1>
<br>
<form action="adminpan.php" method="POST">
Create a new post <br><br>
<textarea placeholder="Post a new Notice..." name="noticepost" rows="10" cols="20" style="overflow:auto;resize:none"  ></textarea><br><br>
<input type="date" name="dateof" required>
<br><br><input type="submit" value="POST NOTICE" name="postnotice">
</form>
<br>
<br><hr>
<br>
<button class="open-button" onclick="openForm()">My profile</button>

<div class="chat-popup" id="myForm">
  <div  class="form-container">
    <center><h1>Welcome Admin</h1><br></center>
	<?php
		include("dbconfig.php");
		session_start();
		echo  $_SESSION['email'];
	?>
	<br>
	Religion: Pigeon<br>
	<hr>
	<table>
	<tr><td>Delete Notice (by date)</td></tr>
	<tr>
	<td><form action="delete.php" method="POST"> <input type="date" name="deletedate" ><br><br>
	<input type="submit" name="confirm" value="Delete"></form></td></tr>
	</table>
	<br>

	
	

       <button type="submit" class="btn" name="logout">LOG OUT</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</center>
<div class="futer"><center>
	<br>
	<font color="white" >
	<h4> CONTACT US</h4>	
	<a href="https://www.facebook.com" class="fa fa-facebook"></a>
	<a href="https://www.instagram.com" class="fa fa-instagram"></a>
	<a href="https://www.linkedin.com" class="fa fa-linkedin"></a>
	<a href="https://www.google.com" class="fa fa-google"></a>
	<a href="https://www.twitter.com" class="fa fa-twitter"></a>
	<br><br><br>
	<img src="qr.png" height="5%" width="5%"><table width="70%">
	<tr><h5>
	<td><h3><a href="about.html">More about us<a></h3></td>	<td>Facilities</td>
	<td></td>
	</h5>
	</tr>
	<tr>
	<td></td>
	<td></td></tr>
	<tr>
	<td></td>
	<td></td></tr>
	<tr><h6>
	<td>Our story</td>
	<td>WiFi</td>
	<td>Subscribe to our NEWSLETTER.</td>
	</tr>
	<tr>
	<td>Team</td>
	<td>Before hand important notices</td>
	<td><input type="email" name="newsdaily"></td>
	</tr>
	<tr>
	<td></td>
	<td>Hygine and friendly working enviorment</td>
	<td><input type="button" value="SUBSCRIBE"></td>
	</h6>
	</tr>
	</table>
	<br>
	
	
	
	</font>
	</div>
	</center>
	</body>
</html>