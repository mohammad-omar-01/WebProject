<?php
$deleteid = $_GET["id"];
if (isset($deleteid)) {

    $con = new mysqli("localhost", "root", "", "webdatabase");
    $query = $con->query("delete from videos where id='$deleteid'");
    $result = mysqli_query($con, $query);
    var_dump($result);
    $con->close();
}