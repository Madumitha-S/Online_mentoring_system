<?php
$servername = "localhost";
$username = "root";
$password ="";
$db = "mentor_course";


$conn = new mysqli($servername , $username , $password,$db );
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
echo "Connection successfully";
}
mysqli_select_db($conn, "women");
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$language = $_POST['language'];
$qualification = $_POST['qualification'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];
$area=$_POST['area'];
$email = stripslashes($email);
$fname= stripslashes($fname);
$lname= stripslashes($lname);
$language= stripslashes($language);
$qualification= stripslashes($qualification);
$age= stripslashes($age);
$mobile= stripslashes($mobile);
$address= stripslashes($address);
$city= stripslashes($city);
$area= stripslashes($area);
$description= stripslashes($description);
$email = mysqli_real_escape_string($conn,$email);
$fname = mysqli_real_escape_string($conn,$fname);
$lname = mysqli_real_escape_string($conn,$lname);
$language = mysqli_real_escape_string($conn,$language);
$qualification = mysqli_real_escape_string($conn,$qualification);
$age = mysqli_real_escape_string($conn,$age);
$mobile = mysqli_real_escape_string($conn,$mobile);
$address = mysqli_real_escape_string($conn,$address);
$city = mysqli_real_escape_string($conn,$city);
$area = mysqli_real_escape_string($conn,$area);
  echo "<br>";
  $sql = ("INSERT INTO mentee_details(email,fname,lname,language,qualification,age,mobile,address,city,area) VALUES ('$email', '$fname', '$lname','$language','$qualification','$age','$mobile','$address','$city','$area')");
  if(!mysqli_query($conn,$sql))
  {
	die('Error :' . mysqli_error($conn));
  }
 else
 {
header("location:login.php");
 }
mysqli_close($conn);
?>
