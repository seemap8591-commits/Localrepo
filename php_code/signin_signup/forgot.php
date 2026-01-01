<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$con = mysqli_connect("localhost", "root", "", "doctor_appointment");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass  = $_POST['pass'];

    $query = "SELECT * FROM useraccounts WHERE email='$email'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row['pass'])) {

            $_SESSION['uname'] = $row['uname'];
            $_SESSION['email'] = $row['email'];

            header("Location: nav_page.html");
            exit();

        } else {
            header("Location: forgot_password.php?error=wrong_password");
        exit();
        }

    } else {
        header("Location: forgot_password.php?error=user_not_found");
        exit();
    }
}
?>
