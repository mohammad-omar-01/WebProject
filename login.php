<?php

if (!isset($webroot)) {
    $webroot = "../../";
}

$con = new mysqli("localhost", "root", "", "webdatabase");
if (isset($_POST['username'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    //echo 'console.log = console.log || function(){};';
    //SELECT `user_name`, `email`, `password` FROM `users` WHERE email = and password =
    $sql = "SELECT * FROM users WHERE email ='$email' and password='$mypassword'";
    $result = mysqli_query($con, $sql);


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['login_user'] = $email;

        header("location:".$webroot .'aPages/aHome/ahome.php');
    } else {
        $errorMessage = "Your Login Name or Password is invalid";
//    var_dump( $errorMessage);
    }


}
?>
