<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login1.css"/>
</head>
<style>
a,p{
  text-decoration:none;
  color:rgb(200, 0, 0);
  }


</style>
<body>
  <div id="bg"></div>

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
 </div>

<div id="description">
<p>THE SMARTEST WAY TO
Learn Data Science Online
Everyday, massive amounts of data are generated in every part of our lives. That makes data fluency an indispensable skill to help you succeed - no matter what industry you’re in. At DataCamp, we’re here to help, whether you're just getting started or are looking to dig deeper.
</p>
</div>

<form name="form1" method="post" action="checklogin.php">
<label>
<img src="d3.jpg" height="142" width="192"></label>
    <br>
	<br>
  <input type="text" name="email" id="email" placeholder="email" class="email" required>


  <input type="password" name="password" id="password" placeholder="password" class="pass" required>

  <button type="submit">login to your account</button>

  <br><br>
  <center><a href="#" >Forgot your password ?</a></center>


</form>

</body>
</html>
