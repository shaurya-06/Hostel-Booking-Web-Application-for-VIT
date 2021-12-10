<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  // if($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $username = mysqli_real_escape_string($con, $_POST['username-find']);
  //
  //
  // }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentDetails.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Student Detail</title>
  </head>
  <body>
    <div class="nav-bar">
      <ul>
        <li style="font-size: 20px;"><a href="https://vtop.vit.ac.in" target="_blank">VTOP</a> </li>
      </ul>
      <ul>
        <li style="font-size: 20px;"><a href="home-admin.php">Home</a></li>
        <li style="font-size: 20px;"><a href="change-about.php">Change About</a></li>
        <li style="font-size: 20px;"><a href="change-update.php">Change Updates</a></li>
        <li style="font-size: 20px;"><a href="studentDetails.php">View Student Details</a></li>
        <li style="font-size: 20px;"><a href="UpdateStudentDetails.php">Update Student Details</a></li>
        <li style="font-size: 20px;"><a href="adminPro.php">Profile</a></li>
        <li style="font-size: 20px;"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
    <br><br><br><br><br><br><br><br><br>
    <div class="container">
      <center><h2>Enter Student RegNo.</h2><br></center>
      <div class="username">
        <form class="form" action="studentPro(admin).php" method="GET"><br><br>
       
          <input type="text" name="username-find" placeholder="RegNo." id="username-find">
        </div><br><br>
        <button type="submit">SHOW</button>
        </form>
      </div>
  </body>
</html>
