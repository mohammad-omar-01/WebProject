<?php
if (!isset($webroot)) {
    $webroot = "../../";
}
$PassError ="";
$UserError="";
$EmailError="";
$username = "";
$email    = "";
$message="";
$generalError="";
$errors = array();
// connect to the database
$db=mysqli_connect('localhost','root','','webdatabase');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// REGISTER USER
if (isset($_POST['signup-button'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $key = 'SuperSecretKey';

//To Encrypt:
    $hash= password_hash($password_1,
        PASSWORD_DEFAULT);
    $password_2 = mysqli_real_escape_string($db, $_POST['password2']);
    if (empty($username)) {
//            echo 'hi1';
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
//            echo 'hi2';
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
//            echo 'hi3';
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
//            echo 'hi4';
        array_push($errors, "The two passwords do not match");
        $PassError='The two passwords do not match';
        $generalError=$PassError;
    }
    $user_check_query = "SELECT * FROM users WHERE user_name='$username' or email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['user_name'] === $username) {
            array_push($errors, "Username already exists");
            $generalError='Username already exists';
//                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
            $generalError='email already exists';
//                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        }
        header('location:' .$webroot.'index.php?errorMessage='.$generalError.'&hasErrors=yes');

        exit;
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
       // $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO users (user_name, Email,Password) VALUES('$username', '$email', '$hash')";
        $result = mysqli_query($db, $query);
        $query = "INSERT INTO account (user_name) VALUES('$username')";
        $result = mysqli_query($db, $query);

        $db->close();
        $_SESSION['username'] = $username;
       // header('location:' .$webroot.'index.php?errorMessage='.$generalError);
        header('location:' .$webroot.'index.php?errorMessage='.$generalError.'&signupmode=yes');
        exit;
    }

    else {
        header('location:' .$webroot.'index.php?errorMessage='.$generalError.'&hasErrors=yes');

    }

}
?>
