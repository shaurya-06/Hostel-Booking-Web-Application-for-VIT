<?php
  include 'config.php';
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $regNo = mysqli_real_escape_string($con, $_POST['regNo']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT user_reg_id FROM user WHERE user_reg_id = '$regNo' and password = '$password'";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
       $_SESSION['login_user'] = $regNo;

       header("location: home.php");
    }else {
       $error = "Your Login Name or Password is invalid";
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login-user.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>User Login</title>
  </head>
  <body>
    <br>
    <h1>VHostel</h1><br>
    <hr><br>
    <h3>Vellore Institute of Technology , Vellore </h3>
    <br><br><br><br><br><br>
    <div class="container">
      <h2>Login</h2><br>
        <h3>[ VTOP Credentials ]</h3><br>
      <form class="student_login_form" action="" method="post">
        <input type="text" name="regNo" placeholder="RegNo." id="username-input" style="width: 300px;
          height: 40px;
          border-radius: 10px;"><br><br>
        <input type="password" name="password" id="password-input" placeholder="Password" style="width: 300px;
          height: 40px;
          border-radius: 10px;">
        <br><br>
        <p id="show-pass" onclick="showpass()">Show Password</p>
        <br><br>
        <div class="error">

        </div>
        <button type="button-login-user" name="button">Sign in</button>
      </form>
    </div>
    <script src="js/login-user.js" charset="utf-8"></script>
<br><br><br><br><br>
<h4> Made with ♥️ by Shreya, Diva, Shaurya. </h4>
  </body>
</html>
