<?php
session_start();
require '../connect.php';

if (isset($_POST['login_user'])) {
  $username = $_POST['username_user'];
  $password = $_POST['password_user'];

  $result  = mysqli_query($conn, "SELECT * from user WHERE username_user = '$username' ");

  if (mysqli_num_rows($result) > 0) {
    $row  = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
      $_SESSION['username_user'] = $username; 
      $_SESSION['login_user'] = true;
      header("location:../index.php");
      exit;
    }
  }
  $error = true;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EzAnime Login & Signup</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="" method="post" id="login-form">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username_user" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password_user" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="login_user">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="#" id="signup-link">Register</a></p>
        <p>or are you admin? <a href="#" id="admin-link">login admin here</a></p>
        <p><a href="../index.php">Back to Menu?</a></p>
      </div>
    </form>

  

    <form action="login_admin.php" method="post" id="login_admin-form" style="display: none;">
      <h1>Login admin</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn" name="login">Login</button>
    </form>
    

    <form action="register_user.php" method="post" id="signup-form" style="display: none;">
      <h1>Sign Up</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email" required>
        <i class='bx bx-envelope'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Username" name="username_user" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm Password" name="password2" required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <button type="submit" class="btn" name="registo">Sign Up</button>
    </form>

    <button id="back-to-main" class="btn" style="display: none; margin-top: 20px;">Back to login?</button>
  </div>

  <script src="jawaa.js"></script>
</body>
</html>
