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
$query="SELECT * from questions WHERE Q_N = 1";
$query3="SELECT * from questions WHERE Q_N = 2";
$result= mysqli_query($conn,$query);
$result3= mysqli_query($conn,$query3);

$query1="SELECT * from choice WHERE Q_N = 1";
$query2="SELECT * from choice WHERE Q_N = 2";
$choices=mysqli_query($conn,$query1);
$choices2=mysqli_query($conn,$query2);
$question=$result->fetch_assoc();
$question1=$result3->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Feedback </title>
  <link rel="stylesheet.css" type= "text/css" />
  <style>
  .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
  }
  body{
    background-image:url("b2.jpg");
   background-size: cover;

  }
</style>
  <body >
    <header>

      <div class="container">
        <h3>FEEDBACK </h3>
      </div></header>
      <div id="form">

          <p class="question"><?php echo $question['question']; ?> </p>
          <form method="post" action="index.html">

          <ul class="choices">

            <?php while($row = $choices->fetch_assoc()) : ?>
              <input name="choice" type=radio value="<?php echo $row['id'];?>"/><?php echo $row['choice'] ?>
            <?php endwhile; ?>
            <p class="question"><?php echo $question1['question']; ?> </p>
            </ul>
            <ul class="choices">

              <?php while($row = $choices2->fetch_assoc()) : ?>
                <input name="choices" type=radio value="<?php echo $row['id'];?>"/><?php echo $row['choice'] ?>
              <?php endwhile; ?>
              </ul>

            </form>

            </div>
   <a href="form.php" class="button" name="next" value="next">Next</a>
          </body>
          </html>
