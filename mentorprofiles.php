<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentor_course";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
<!DOCTYPE html>
<html>
<head>
<title>Title</title>
     <meta charset="UTF-8">
     <title>Website</title>
  <meta name="author" content="WebDev">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <link href="example.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  html {
 font-family: Arial, Helvetica, sans-serif; color:#333;}
body {
 background:#ccc; margin:0;
}
#container {
 width:600;
 margin:0 auto;
 background:#fff;
}
#header {
 width:100%;
 height:60px;
 border-bottom:1px solid #c7c7c7;
 background:#333;
 }

#SU {
 float:left;
 width:100px;
 height:40px;
 color:White;
 text-align:center;
 background:none;
 margin:0;
 padding: 14px 16px;
}

#login {
 float:right;
 width:100px;
 height:40px;
 color:White;
 text-align:center;
 background:none;

 margin:0;
 padding: 14px 16px;
}

#navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

#navbar li {
    float: left;
}

#navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#navbar li a:hover {
    background-color: #111;
}


#CN {
 background:Plum;
 height:120px;
 padding:20px;
 color:black;
 clear: both;
}
#Description {
 float:left;
 width:665px;
 padding:20px;
 height:250px;
 border:1px solid #333;
 color:black;
 background:LightCyan;
}
#Address {
 float:right;
 width:665px;
 height:250px;
 border:1px solid #333;
 color:black;
 background:Silver;
 padding :20px;
}
#footer {
 padding:20px;
 clear:both;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

</style>
</head>
<body>
<!-- container -->
 <div id="container">
 <!--  header -->
 <div id="header">
  <div id="SU">Sign Up</div>
  <div id="login">Login</div>
  <div id="navbar">
   <ul>
    <li><a href="#">Course</a></li>
    <li><a href="#">Price</a></li>
    <li><a href="#">Mentor</a></li>
    <li><a href="#">Area</a></li>
   </ul>
   </div>
  </div>
  <style>
	* {box-sizing:border-box}
	body {font-family: Verdana,sans-serif;}
	.mySlides {display:none}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 1000px;
	  position: relative;
	  margin: auto;
	}

	/* Caption text */
	.text {
	  color: #f2f2f2;
	  font-size: 15px;
	  padding: 8px 12px;
	  position: absolute;
	  bottom: 8px;
	  width: 100%;
	  text-align: center;
	}

	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  height: 13px;
	  width: 13px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active {
	  background-color: #717171;
	}

	/* Fading animation */
	.fade {
	  -webkit-animation-name: fade;
	  -webkit-animation-duration: 1.5s;
	  animation-name: fade;
	  animation-duration: 1.5s;
	}

	@-webkit-keyframes fade {
	  from {opacity: .4}
	  to {opacity: 1}
	}

	@keyframes fade {
	  from {opacity: .4}
	  to {opacity: 1}
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .text {font-size: 11px}
	}
	</style>
	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="p1.png" style="width:100%">
	  <div class="text">Python</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="p2.jpg" style="width:80%">
	  <div class="text">Java</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="p3.jpg" style="width:50%">
	  <div class="text">App Developmemt</div>
	</div>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    for (i = 0; i < slides.length; i++) {
	        slides[i].style.display = "none";
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}
	    slides[slideIndex-1].style.display = "block";
	    setTimeout(showSlides, 2000); // Change image every 2 seconds
	}
	</script>

  <div id="CN">

  <?php
  $sql = "SELECT subject FROM mentor_details where fname='Madumitha'";
  $result = mysqli_query($conn,$sql);
  if ($result) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo  " <b>Course_name: " . $row["subject"]."<br>";
      }
  } else {
      echo "0 results";
  }

  //$conn->close();
  ?></div>
   <div id="Description"><?php
   //echo "Connected successfully";
   $sql = "SELECT address , description,email,qualification FROM mentor_details where fname='Madumitha'";
   $result = mysqli_query($conn,$sql);
   if ($result) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
          echo "<b> Address:". $row["address"] ."<br><br>";
          echo "<b> Experience: " . $row["description"]."<br><br>";
          echo "<b> Email_id: " . $row["email"]."<br><br>";
          echo "<b> Educational Details: " . $row["qualification"]."<br><br>";
       }
   } else {
       echo "0 results";
   }
  // $conn->close();
   ?></div>
   <div id="Address"><?php

   //echo "Connected successfully";
   $sql = "SELECT mobile,slot,day,price FROM mentor_details where fname='Madumitha'";
   $result = mysqli_query($conn,$sql);
   if ($result) {
       // output data of each row

       while($row = $result->fetch_assoc()) {
         echo " Phone_no: " . $row["mobile"]."<br><br>";
          echo " Timings- ".$row["slot"]."<br><br>";
          echo "Days: ".$row["day"] ."<br><br>";
          echo  " price: " . $row["price"]."<br><br>";

   }} else {
       echo "0 results";
   }
  // $conn->close();
   ?></div>

  <!-- footer -->
  <div id="footer">
    <div class="w3-col s4 w3-justify">
          <i class="fa fa-facebook w3-hover-opacity w3-large" ></i>
          <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
          <i class="fa fa-youtube w3-hover-opacity w3-large"></i>
          <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
          <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
          <i class="fa fa-google w3-hover-opacity w3-large"></i>
        </div>
   </div>
 </div><!-- end container -->
</body>
</html>﻿
