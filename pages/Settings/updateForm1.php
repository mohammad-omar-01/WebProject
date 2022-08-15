<?php
session_start();
$old=$_POST["oldpass"];
$new=$_POST["newpass"];
$new1=$_POST["newpass1"];
$username=$_SESSION['login_user'];

$conn = new mysqli("localhost", "root", "", "webdatabase");
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE user_name ='$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $a = $row['password'];
    if (password_verify($old, $a)) {
        if ($new === $new1) {
            $hash = password_hash($new,
                PASSWORD_DEFAULT);
            $sql = "update users set password='$hash' where user_name='$username'";

        } else {
            $passError = "Two Passwords doesn't Match";

            ?>
            <script>
                alert("PassWords doesn't match");
            </script><?php
            header('location:' . 'AccountSett.php?errorMessage=' . $passError . '&hasErrors=yes');

        }

    } else {
        $passError = "The Old Password is Not Correct!";
        ?>
        <script>
            alert("OLd Password is not correct")
        </script><?php
        header('location:' . 'AccountSett.php?errorMessage=' . $passError . '&hasErrors=yes');


    }
}
$conn->close();


?>
