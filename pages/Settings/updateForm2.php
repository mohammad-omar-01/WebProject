<?php
session_start();
$fname = $_POST["fname"];
$name = $_POST["lname"];
$phone = $_POST["phone"];
$username=$_SESSION['login_user'];


$conn = new mysqli("localhost", "root", "", "webdatabase");
echo "HIIIIII";
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "update account set first_name='$fname', last_name='$name', phone='$phone' where user_name='$username'";

if ($conn->query($sql) === TRUE) {
    echo "Records updated: ".$fname."-".$name."-".$phone."-".$_SESSION['login_user'];
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
