<?php 
require 'config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email and Password Validation</title>

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheets.css" />
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Boxicons CSS -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  
  </head>
  <body>
    <div class="container">
      <header>Signup</header>
      <form action="connect.php" method="POST">
        <div class="field user-field">
          <div class="input-field">
            <input type="text" placeholder="Enter your username" class="user" name="uname" required >
          </div>
        </div>
        <div class="field email-field">
          <div class="input-field">
            <input type="email" placeholder="Enter your email" class="email" name="email" required>
          </div>
        </div>
        <div class="field create-password">
          <div class="input-field">
            <input type="password"
              placeholder="Create password"
              class="password" name="pass" required
            >
           
          </div>
        </div>
        <div class="field confirm-password">
          <div class="input-field">
            <input
              type="password"
              placeholder="Confirm password"
              class="cPassword" name="cpass" required
            >
            
          </div>
        </div>
        <div class="input-field button">
          <input type="submit" value="Submit Now" name="sub" >
        </div>
        </form>

        <!-- OR Divider -->
    <div class="or-section">
        <hr><span class="or-text">OR</span><hr>
    </div>

    <!-- Google Sign Up -->
    <a class="google-btn" href="google-callback.php">
        <img src="https://s3-alpha.figma.com/hub/file/6055265191/97a0b7ac-13bb-4f59-986e-8c3e960435fd-cover.png">
        Sign up with Google
    </a>

    <p class="login-text">Already have an account? <a href="forgot_password.php">Log In</a></p>
 <!-- /form -->
    </div>

    <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
      <script>
      swal("Success!", "Signup Successful", "success")
      .then(() => {
        window.location.href = "nav_page.html";
      });
      </script>
      <?php
    } ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'email_exists') { ?>
      <script>
      swal("Error!", "Email already registered", "error");
      </script>
      <?php
    } ?>

    <?php if (isset($_GET['error']) && $_GET['error'] == 'pass_mismatch') { ?>
      <script>
      swal("Error!", "Password and confirm password do not match", "error");
      </script>
      <?php
    } ?>



  </body>
</html>