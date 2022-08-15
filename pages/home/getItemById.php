<?php
session_start();
$id = $_GET["id"];
if (isset($id)) {

    $con = new mysqli("localhost", "root", "", "webdatabase");
    $query = "select * from videos where id = '$id'";
    $result = mysqli_query($con, $query);
    $item = $result->fetch_assoc();
    echo  json_encode($item);

    $con->close();
}