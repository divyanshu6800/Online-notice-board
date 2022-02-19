<!DOCTYPE php>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to notice board</title>
	<link href="css1.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="skytry.jpg"><center>
<img src="header.jpg" width="65%"> 
<br><br>
<h1>Welcome user</h1>
<br> 
<h4> NOTICES </H4>
<?php
include("dbconfig.php");
$myquery="select*from admininfo order by dateof desc";
$result=mysqli_query($conn,$myquery);
if (mysqli_num_rows($result) > 0) { 
        
        while ($row = mysqli_fetch_array($result)) { 
           
            echo "<div class='noticebox'>".$row['content']."<br><br>".$row['dateof']."</div>";  
        } 
	}		
else
	echo "An unknown error has occured";
?>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 10</div>
  <img src="slide1.jpg" style="width:100%">
  <div class="text">MOTIVATIONAL QUOTES</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 10</div>
  <img src="slide2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img src="slide3.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img src="slide4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 10</div>
  <img src="slide5.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img src="slide6.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img src="slide7.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img src="slide8.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 10</div>
  <img src="slide9.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 10</div>
  <img src="slide10.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<BR><BR>

</center>

<button class="open-button" onclick="openForm()">My profile</button>

<div class="chat-popup" id="myForm">
  <div  class="form-container">
    <center><h1>Welcome User</h1><br></center>
	<?php
		include("dbconfig.php");
		session_start();
		echo  $_SESSION['email'];
	?>
	<br>
	Religion: Pigeon<br>
	<hr>
	<table>
	<tr><td>Edit account info</td></tr>
	<tr><td><a href="personal.php"> Personal</a></td>
	<td><a href="security.php"> Security</a></td></tr>
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
	<table width="70%">
	<tr><h5>
	<td><h3><a href="about.html">More about us<a></h3></td>
	<td>Facilities</td>
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