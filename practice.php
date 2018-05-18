<script>
function getcity(id) {
			xhr = new XMLHttpRequest();
			xhr.open('GET' , 'test.php?idd='+id, true);
			xhr.send();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status==200){
					document.getElementById("city_display").innerHTML = xhr.responseText;
					}

				}


}

function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				}
	}


	function password (pass){
	var a =	document.getElementById('pass1').value;
	//	document.write(a);
		var b = document.getElementById('pass2').value;
		if (a == b ){
			document.getElementById('cnfrmpass').innerHTML = "<font color='#00CC00'>Matched</font>";
			}
			else {

				document.getElementById('cnfrmpass').innerHTML = "<font color='red'>Miss matched</font>";
				}
		}

</script>

<?php
include_once('config.php');
$result = mysqli_query($conn, 'select * from country');
if (!$result) {
    echo 'query failed';
}
?>
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
body{
	background-image:url("chat.jpg");
	background-size: cover;

}
</style>
<body>
<form method="post" action="process.php">
<img src="chat.jpg" height="142" width="250"></label>
<br>
<br>
<input type="email" id="email" style=" width:250px" name="email" placeholder="email" class="email" required>
<input type="password" id="password" style=" width:250px" name="password" placeholder="password" class="pass" required>

<center><button  type="submit">Login to Chat</button></center>



<?php
if (isset($_GET['login_error'])) {
?><?php
    echo $_GET['login_error'];
?>
<?php
}
?>
</form>
</body>
</html>
