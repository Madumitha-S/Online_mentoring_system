<?php

$conn = new mysqli("localhost", "root", "")or die("cannot connect");
mysqli_select_db($conn, "mentor_course")or die("cannot select DB");

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($conn,$email);
$password = mysqli_real_escape_string($conn,$password);
$sql="SELECT * FROM signup WHERE email='$email' and password='$password' and type='mentor' and status='active'";
$sql1="SELECT * FROM signup WHERE email='$email' and password='$password' and type='mentee' and status='active'";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
if (false == $result) {
    echo mysqli_error($conn);
}
if (false == $result1) {
    echo mysqli_error($conn);
}
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
$_SESSION['email']='email';
//session_register("mypassword");
$_SESSION['password']='password';
header("location:mentorprofile.php");
}
else if($count1==1) {
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
$_SESSION['email']='email';
//session_register("mypassword");
$_SESSION['password']='password';
header("location:search.php");
}
else {
echo "<script>
alert('ACCESS DENIED! CHECK YOUR USERNAME OR PASSWORD');
window.location.href='login.php';
</script>";
}
?>
