<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['SubmitVideo'])) {
        $name = $_POST["name"];
        $type = $_POST["type"];
        $episode = $_POST["episode"];
        $season = $_POST["season"];
        $logo = $_FILES["logo"]["name"];
        $photo = $_FILES["photo"]["name"];
        $video = $_FILES["video"]["name"];
        $description = $_POST["description"];
        $category = $_POST["category"];
//        echo $name . $type . $logo . $video . $photo . $description . $season . $episode . $type;
        echo '<pre dir="ltr" style="text-align: left">' . var_export($_FILES, true) . '</pre>';

        echo '<pre dir="ltr" style="text-align: left">' . var_export($_POST, true) . '</pre>';
        $con = new mysqli("localhost", "root", "", "webdatabase");
        $query = "INSERT INTO videos (name, type,logo,video,cover,description,season,episode,category) VALUES('$name', '$type', '$logo','$video', '$photo', '$description','$season', '$episode', '$category')";
        $result = mysqli_query($con, $query);
        uploadFileByName("logo");
        uploadFileByName("photo");
        uploadFileByName("video");
    }



    if (isset($_POST['SubmitEditVideo'])) {
        $con = new mysqli("localhost", "root", "", "webdatabase");

        $id = $_POST["id"];
        $query = "select * from videos where id = '$id'";
        $result = mysqli_query($con, $query);
        $row = $result->fetch_assoc();
        $logo = $row['logo'];
        $photo = $row['cover'];
        $video = $row['video'];
        $name = $_POST["name"];
        $type = $_POST["type"];
        $episode = $_POST["episode"];
        $season = $_POST["season"];
        if(!empty($_FILES["logo"]["name"])) {
            $logo = $_FILES["logo"]["name"];
        }
        if(!empty($_FILES["photo"]["name"])) {
            $photo = $_FILES["photo"]["name"];
        }
        if(!empty($_FILES["video"]["name"])) {
            $video = $_FILES["video"]["name"];
        }
        $description = $_POST["description"];
        $category = $_POST["category"];
        $query = "update videos set name='$name', type='$type', logo='$logo', video='$video', cover='$photo', description='$description'
               , season='$season', episode='$episode',category='$category' where id='$id'";
        $result = mysqli_query($con, $query);
        uploadFileByName("logo");
        uploadFileByName("photo");
        uploadFileByName("video");
    }
}


function uploadFileByName($fileParamName){


    $target_dir = "../../Uploads/";
    $target_file = $target_dir . basename($_FILES[$fileParamName]["name"]);
    move_uploaded_file(  $_FILES[$fileParamName]["tmp_name"],$target_file);
}
