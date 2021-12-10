<?php
  include 'config.php';
  session_start();

  if(!isset($_SESSION['login_user'])){
		header('Location:logout.php');
	}

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['regNo']);
    $name = mysqli_real_escape_string($con, $_POST['fullname']);
    $number = mysqli_real_escape_string($con, $_POST['contact']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $guardian_name = mysqli_real_escape_string($con, $_POST['guardianName']);
    $guardian_number = mysqli_real_escape_string($con, $_POST['gContact']);
    $query1 = "UPDATE userdetails SET userName='$name', phoneNumber='$number', address='$address', guardianName='$guardian_name', guardianContact='$guardian_number' WHERE user_reg_id='$username'";
    $result1 =mysqli_query($con, $query1);
    if (!$result1) {
      die('Error: ' . mysqli_error($con));
    }
    else {
      echo "<script>alert('Details Updated')</script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentDetails.css">
    <link rel="stylesheet" href="css/newReg.css">
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
      <form class="newReg" name="update_student_details" action="UpdateStudentDetails.php" method="post">
        <table>
          <tr>
            <td style="font-weight: bold;">Registration No.:</td>
            <td><input type="text" name="regNo" placeholder="RegNo." id="username-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Full Name:</td>
            <td><input type="text" name="fullname" placeholder="Full Name" id="fullname-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Contact No.:</td>
            <td><input type="tel" name="contact" placeholder="Contact Number" id="contact-input" pattern="[7-9]{1}[0-9]{9}"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Address:</td>
            <td><input type="textarea" name="address" placeholder="Address" id="address-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Guardian Name:</td>
            <td><input type="text" name="guardianName" placeholder="Guardian Name" id="guardianName-input"></td>
          </tr>
          <tr>
            <td style="font-weight: bold;">Guardian Contact No.:</td>
            <td><input type="tel" name="gContact" placeholder="Guardian Contact Number" id="contact-input" pattern="[7-9]{1}[0-9]{9}"></td>
          </tr>
        </table>
        <br>
        <button style="font-weight: bold;" type="submit" name="button">UPDATE</button>
        </div>
      </form>
      </div>
  </body>
</html>