<?php

session_start();
if (!isset($webroot)) {
    $webroot = "../../";

}

$con = new mysqli("localhost", "root", "", "webdatabase");
if (isset($_POST['email'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

     $sql = "SELECT * FROM users WHERE email ='$email'";
    $result = mysqli_query($con, $sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $a = $row['password'];

        echo 'here here here success';
        if (password_verify($mypassword, $a)) {
            $_SESSION['login_user'] = $row['user_name'];

            $_SESSION['email']=$row['email'];
            header("location:" . $webroot . 'HTMLs/Home.php');
        } else {
            $errorMessage = "Your email or Password is invalid !";
            $_SESSION['ErrorMessage'] = $errorMessage;
            header('location:' . $webroot . 'index.php?LoginMessage=' . $errorMessage);
        }

    }
}
?>
