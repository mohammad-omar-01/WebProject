<?php
session_start();
$name = $_GET["name"];
if (isset($name)) {
    $con = new mysqli("localhost", "root", "", "webdatabase");
    $query = "select * from videos where name like '%". ($name) ."%'";
    if(isset( $_GET["season"])){
        $query . " and where season = '" . $_GET["season"]. "'";
    }
    $result = mysqli_query($con, $query);
    $item = $result->fetch_all($result->num_rows);
    echo  json_encode($item);
    $con->close();
}