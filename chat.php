<?php
session_start();
 ?>
<script>

function getText() {

	var $a = document.getElementById('text').value;

	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'chatdb.php',true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send('chat='+$a);
	xhr.onreadystatechange=function(){
		if (xhr.responseText)
		{
		//	document.getElementById('chatarea').innerHTML=xhr.responseText;
		}
	}
}


function setText(){

	xhr = new XMLHttpRequest();
	xhr.open('POST' , 'chatFetch.php' , true);
	xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr.send();
	xhr.onreadystatechange = function()
	{
		document.getElementById('chatarea').innerHTML = xhr.responseText;
	}

	}
	setInterval("setText()",2000);
	setInterval("users()",3000);


function users(){
	xhr1 = new XMLHttpRequest();
	xhr1.open('POST' , 'userFetch.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();
	xhr1.onreadystatechange = function()
	{
		document.getElementById('loginperson').innerHTML = xhr1.responseText;
	}
}


</script>
<?php
include_once('config.php');
echo "<br>";
echo "<center>User Name: " . $_SESSION['name']."<br></center>";

if (isset($_GET['logout']))
{
	$result = mysqli_query($conn, "UPDATE signup
	SET user_status = '0'
	WHERE email = '$_SESSION[email]';");
	session_destroy();
  header('location: search.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
}
?>
<body>
  <form>
  <input type="submit" style="float:right" class="button" name="logout" value="logout" />
  </form>
<br><br><br>
<div id="chatbox">

	<div id ="chatarea">
	</div>

	<div id="loginperson">
	</div>
</div>
	<div id="textbox">
	<form>
		<textarea rows="6" cols="104" id="text"></textarea>
	</form>

	</div>
</center>

<br><br><input type="button" style="float:left" class = "button" value="Send"  onclick="getText()" />



</body>
<style>
body{
background-color: #DCDCDC;
}
#chatbox
{
	border-style: groove;
	height:500px;
	width:100%;
  background-image: url("chat_image.jpg");

}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}
#chatarea
{
	width:750px;
	height:500px;
	float:left;
	overflow:auto;
  background-color: FFEFD5;
}
#loginperson
{
  background-color: E6E6FA;
	width:238px;
	height:497px;
	float:left;
}
#textbox
{
  border-style: none;
	width:750px;
	height:89px;
	float:left;
}
#chatting
{
	float:left;

}
</style>
<?php
	if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
		//session_destroy();
		header('location: practice.php');
		}
?>
