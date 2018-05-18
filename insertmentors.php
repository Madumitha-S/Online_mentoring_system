<?php
$servername = "localhost";
$username = "root";
$password ="";
$db = "mentor_course";


$conn = new mysqli($servername , $username , $password , $db );
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
echo "Connection successfully";
}
mysqli_select_db($conn, "mentor_course");
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$language = $_POST['language'];
$subject = $_POST['subject'];
$qualification = $_POST['qualification'];
$price = $_POST['price'];

$age = $_POST['age'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];

$email = stripslashes($email);
$fname= stripslashes($fname);
$lname= stripslashes($lname);
$language= stripslashes($language);
$subject= stripslashes($subject);
$qualification= stripslashes($qualification);
$price= stripslashes($price);
$age= stripslashes($age);
$mobile= stripslashes($mobile);
$address= stripslashes($address);
$city= stripslashes($city);

$email = mysqli_real_escape_string($conn,$email);
$fname = mysqli_real_escape_string($conn,$fname);
$lname = mysqli_real_escape_string($conn,$lname);
$language = mysqli_real_escape_string($conn,$language);
$subject = mysqli_real_escape_string($conn,$subject);
$qualification = mysqli_real_escape_string($conn,$qualification);
$price = mysqli_real_escape_string($conn,$price);

$age = mysqli_real_escape_string($conn,$age);
$mobile = mysqli_real_escape_string($conn,$mobile);
$address = mysqli_real_escape_string($conn,$address);
$city = mysqli_real_escape_string($conn,$city);

  echo "<br>";
  $sql = ("INSERT INTO mentor_details(email,fname,lname,language,subject,qualification,price,age,mobile,address,city) VALUES ('$email', '$fname', '$lname','$language','$subject','$qualification','$price','$age','$mobile','$address','$city')");
  if(!mysqli_query($conn,$sql))
  {
	die('Error :' . mysqli_error($conn));
  }
 else
 {
header("location:search.php");
 }
mysqli_close($conn);
?>
