<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email and Password Validation</title>
    <link rel="stylesheet" href="stylesheets.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body>
    <div class="container">
      <header>Login</header>
      <form action="forgot.php" method="post">
        <div class="field user-field">
          <div class="input-field">
            <input type="text" name="email" placeholder="Enter your Email" class="user" required />
          </div>
          </div>
           <div class="field create-password">
          <div class="input-field">
            <input type="password" name="pass"
              placeholder="Enter password"
              class="password" required
            />
          </div>
        </div>   
        <div class="field forgot-container">
            <a href="#" class="forgot">forgot password?</a>
        </div>
         <div class="input-field button">
          <input type="submit" name="login" value="Login" />
        </div>  
        <div class="field new-acc">
          <a href="login.php" class="new">Create new account</a>
        </div>
      </form>
        </div>
      
        
    <?php 
    if (isset($_GET['error']) && $_GET['error'] == 'user_not_found') { 
      ?>
      <script>
      swal("Error!", "User not found", "error");
      </script>
      <?php
    } 
    ?>

    <?php 
    if (isset($_GET['error']) && $_GET['error'] == 'wrong_password') { 
      ?>
      <script>
      swal("Error!", "Incorrect password", "error");
      </script>
      <?php
    } 
    ?>
            
    </body>
    </html>