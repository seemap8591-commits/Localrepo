<?php
$con = mysqli_connect('localhost','root','','doctor_appointment');

if (isset($_POST['sub'])) {

    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $confirmpass  = $_POST['cpass'];

    $checkEmail = "SELECT * FROM useraccounts WHERE email='$email'";
    $result = mysqli_query($con,$checkEmail);

    if(mysqli_num_rows($result)>0){
        header("Location: login.php?error=email_exists");
        exit();
    }

    if($pass!==$confirmpass){
        header("Location: login.php?error=pass_mismatch");
        exit();
    }


    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO useraccounts(uname,email,pass)
              VALUES ('$uname','$email','$hashedPass')";

    $execute=mysqli_query($con,$query);

    if ($execute) {
        header("Location: login.php?success=1");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>