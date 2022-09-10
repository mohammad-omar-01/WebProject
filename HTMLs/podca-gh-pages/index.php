<?php
session_start();
$isAdmin=($_SESSION['login_user']=='Mohammad Omar') ? True : False;

$id=$_GET["id"];
include "../connection.php";
$query = " SELECT * FROM podcasts WHERE MasterId = '$id'";
$result3 = mysqli_query($con,$query);
$Podcasts = [];
while ($row3 = mysqli_fetch_array($result3)) {
    array_push($Podcasts, $row3);
  
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['SubmitNewAudio'])) {
            $name = $_POST["podCastNAme"];
            echo "NAMEIS".$name;
            $pulicher=$_POST['pulicher'];
            $photo = $_FILES["Pic"]["name"]; 
            $Audio= $_FILES["Audio"]["name"];
            $description=$_POST['description'];
            $query = "INSERT INTO podcasts (Name,MasterId, photo,audio,description,pulicherNAme) VALUES('$name','$id','$photo','$Audio', '$description','$pulicher')";
            $result = mysqli_query($con, $query);
            uploadFileByName("Audio");
            uploadFileByName("Pic");

    
        }
    }
    function uploadFileByName($fileParamName){

        $target_dir = "../../Uploads/";
        $target_file = $target_dir . basename($_FILES[$fileParamName]["name"]);
        move_uploaded_file( $_FILES[$fileParamName]["tmp_name"],$target_file);
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Podcast</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <link rel="stylesheet" href="css/stylse.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
          integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <script type='text/javascript'
            src='http://code.jquery.com/jquery-1.10.1.js'></script>
   
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>

</head>
<body>
<header>
    <nav class="navigation" id="myTopnav">
        <a href="#" class="logo">
            <img src="../../images/نهضة2.png">
            <u1 >
                <li> <a href="../Home.php"> الرئيسية </a> </li>
                <li> <a href="../PodCast.php">بودكاست</a> </li>
                <li> <a href="#">لطفلك</a> </li>
                <li> <a href="#">الاكثر مشاهدة</a> </li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                </a>
                <div class="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="بحث">
                </div>

                <li>
                    <div class="dropdown">
                        <a href="#" class="iq-user-dropdown search-toggle  align-items-center">
                            <img src="../../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                        </a>

                        <div class="dropdown-content">


                            <a href="#" class="">
                                <div class="media align-items-center">
                                    <div class="">
                                        <i class="fa fa-user "></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="drop">الإعدادات</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="">
                                <div class="media align-items-center">
                                    <div class="">
                                        <i class="fa fa-sign-out  "></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="drop">تسجيل الخروج</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                </li>
            </u1>


        </a>

    </nav>
</header>

    
    <?php
    if($isAdmin){?>
    <button style="margin-top:100px;margin-left: 38cm" type="button" dir="rtl" data-toggle="modal" id="modal2" data-target="#addItemModal">إضافة
</button>
<?php }?>
    
<div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" id="addItemModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" dir="rtl" style="padding: 0cm .5cm 0cm .5cm">
                <div class="modal-header">
                    <h3 id="myModalLabel">إضافة محتوى جديد</h3>
                </div>
                <?php include "formofPod.php"?>
            </div>
        </div>
    </div>

    </div>
    

</div>
<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5" data-aos="fade-up">
            <div class="col-md-12 text-center">
                <h2 class="font-weight-bold text-black" ></h2>
            </div>
        </div>
        <?php foreach ($Podcasts as $key => $row) {?>

        <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
            <div class="image" style="background-image: url('../../Uploads/<?php echo $row['photo']?>');"></div>
            <div class="text">
                <h3 class="font-weight-light"><?php echo $row['Name'] ?></h3>
                <div class="text-white mb-3" dir="ltr"><span class="text-black-opacity-05"><small><?php echo $row['pulicherNAme']?> <span class="sep">/</span>  </small></span></div>
                <p class="mb-4"><?php echo $row['description'] ?> </p>
                <div class="player">
                    <audio id="player2" preload=auto controls style="width: 90%">
                        <source src="../../Uploads/<?php echo $row['audio']?>" type="audio/mp3">
                    </audio>
                </div>
            </div>
        </div>
        <?php } ?>
       



        <script src="js/bootstrap.min.js"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                        }
                    });
                }
            });
        </script>
        <script src="js/main.js"></script>
</body>
</html>