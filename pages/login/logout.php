<?php
if (!isset($webroot)) {
    $webroot = "../../";

}

session_start();
session_unset();
session_destroy();
header('location:' .$webroot.'index.php');
