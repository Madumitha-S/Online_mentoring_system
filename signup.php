<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css"/>
</head>
<style>
a,p{
  text-decoration:none;
  color:rgb(200, 0, 0);
  }
  .error {color: #FF0000;}
</style>
<body>
<div id="bg"></div>

<form action="insertmembers.php" method="POST">
<label>

</label>
    <br>
	<br>
  <input type="email" id="email" name="email" placeholder="email" class="email" required>
  <input type="password" id="password" name="password" placeholder="password" class="pass" required>
  <label class="container">Mentor
  <input type="radio" checked="checked" name="radio" id="type" value="mentor">
  <span class="checkmark"></span>
   </label>
   <label class="container">Mentee
  <input type="radio" name="radio" id="type" value="mentee">
  <span class="checkmark"></span>
  </label>
  <center><button style=" width:60px" type="submit" onclick="alert('You have been registered successfully!!!')">SignUp</button></center>

  <br><br><br>
  <center><a href="login.html" >Already registered? Login Me</a></center>


</form>

</body>
</html>
