<?php
session_start();
include "./connection.php";

if (!isset($webroot)) {
    $webroot = "../../";

}


$classes = array("slick-bg s-bg-1", "slick-bg s-bg-2", "slick-bg s-bg-3");
$ids = array("slide1", "slide2", "slide3");
$i = 0;

$upRoot = "../Uploads/";


if (!isset($_SESSION['login_user'])) {
    header('location:' . $webroot . 'index.php');
    exit;
} else {
}

$query = "SELECT * FROM videos ORDER BY id  LIMIT 3;";
$result = mysqli_query($con, $query);
$searchResultRows = [];
$promosForSlider = ['y2meta.com-الرواد _ برومو مع أحمد الشقيري-(1080p).mp4','طحالب اعلان.mp4','برنامج قلبي اطمأن _ إعلان الموسم الخامس.mp4'];

while ($row = mysqli_fetch_array($result)) {
    $names[] = $row['name'];
    $covers[] = $row['cover'];
    $logos[] = $row['logo'];
    $video[] = $row['video'];
    $description[] = $row['description'];
    $season[] = $row['season'];
    $episode[] = $row['episode'];
    $category[] = $row['category'];
    $type[] = $row['type'];
    array_push($searchResultRows, $row);
}

?>
<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Video Streaming</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../css/slick.css"/>
    <link rel="stylesheet" href="../css/slick-theme.css"/>
    <link rel="stylesheet" href="../css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../css/animate.min.css"/>
    <link rel="stylesheet" href="../css/magnific-popup.css"/>
    <link rel="stylesheet" href="../css/select2.min.css"/>
    <link rel="stylesheet" href="../css/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="../css/sliderrr.css"/>
    <link rel="stylesheet" href="../css/videoplaylist.css"/>
    <link rel="stylesheet" href="../css/slick-animation.css"/>
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /* Loop through a collection of all HTML elements: */
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /* Make an HTTP request using the attribute value as the file name: */
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4) {
                            if (this.status == 200) {
                                elmnt.innerHTML = this.responseText;
                            }
                            if (this.status == 404) {
                                elmnt.innerHTML = "Page not found.";
                            }
                            /* Remove the attribute, and call this function once more: */
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    }
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /* Exit the function: */
                    return;
                }
            }
        }
    </script>

    <meta name="" , content="width = device=width , initial-scale =1.0">
    <meta charset="UTF-8">
    <title> Home Page</title>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Title</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
          integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
</head>
<body class="mainm" id="hh">

<header>
    <nav class="navigation" id="myTopnav">
        <a href="#" class="logo">
            <img src="../images/نهضة2.png">
            <u1>
                <li><a href="Home.php"> الرئيسية </a></li>
                <li><a href="PodCast.php">بودكاست</a></li>
                <li><a href="#kids">لطفلك</a></li>
                <li><a href="#thebestback">الاكثر مشاهدة</a></li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                </a>
                <div class="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="بحث">
                </div>

                <li>
                    <div class="dropdown">
                        <a href="#" class="iq-user-dropdown search-toggle  align-items-center">
                            <img src="../images/user/user.png" class="img-fluid user-m rounded-circle" alt=""/>
                        </a>

                        <div class="dropdown-content">


                            <a href="../pages/Settings/AccountSett.php" class="">
                                <div class="media align-items-center">
                                    <div class="">
                                        <i class="fa fa-user "></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h6 class="drop">الإعدادات</h6>
                                    </div>
                                </div>
                            </a>
                            <?php
                            if (isset($_SESSION['login_user']) && $_SESSION['login_user'] === "Mohammad Omar") {
                                ?>
                                <a href="../pages/home/adminpage.php" class="">
                                    <div class="media align-items-center">
                                        <div class="">
                                            <i class="fa fa-sign-out  "></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="drop">تعديل</h6>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            }
                            ?>
                            <a href="../pages/login/logout.php" class="">
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
<script>
    var rows = [];
</script>
<section id="home" class="iq-main-slider p-0">

    <div id="home-slider" class="slider m-0 p-0  ">

        <?php foreach ($searchResultRows as $key => $row) { ?>
            <div class="slide <?php echo " $classes[$i]" ?>"
                 style="background-image: url('../Uploads/<?php echo $row['cover'] ?>')">

                <div class="container-fluid position-relative h-100">

                    <div class="slider-inner h-100">

                        <div class="row align-items-center h--100">

                            <div class="col-xl-150 col-lg-12 col-md-12">

                                <script>
                                    rows[<?=$key?>] = JSON.parse(`<?= json_encode($row) ?>`);
                                    console.log(row)
                                </script>
                                <a href="javascript:void(0)">

                                    <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                        <img src="../Uploads/<?php echo $row['logo'] ?>" class="c-logo" alt=""/>
                                    </div>
                                </a>
                                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                    data-delay-in="0.6">

                                </h1>

                                <div class="d-flex flex-wrap align-items-right fadeInLeft animated"
                                     data-animation-in="fadeInLeft">
                                    <div class="infoo">
                                        <div class="slider-ratting d-flex align-items-center mr-50 mt-20 mt-md-3">


                                        </div>


                                        <div class="d-flex align-items-center mt-2 mt-md-3">
                                        </div>

                                        <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                                            <div class="text-primary title starring">
                                                تقديم :
                                                <span class="text-body">نهضة</span>
                                            </div>
                                            <div class="text-primary title genres">
                                                النوع : <span class="text-body"><?php echo $row['category'] ?></span>
                                            </div>
                                            <div class="text-primary title tag">
                                                المدة :
                                                <span class="text-body"><?php echo $row['episode'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center r-mb-22 mt-4" data-animation-in="fadeInUp"
                                     data-delay-in="1.2">
                                    <a href="#" class="btn btn-hover iq-button video-btn" data-bs-toggle="modal"
                                       data-bs-target="#play"
                                       onclick="playIt('<?= $row['video'] ?>');loadSeriesEpisodes({name: '<?=$row["name"]?>',season: '<?=$row["season"]?>'});console.log(<?= $i  . "222" . $key?>)"><i
                                            class="fa fa-play mr-3"></i>تشفيل الآن</a>
                                    <a href="#" onclick="show_pup()" class="btn btn-hover iq-button  video-btn"
                                       data-bs-toggle="modal" data-bs-target="#moreinfo<?php if ($i > 0) echo $i ?>"><i
                                                class="fa fa-play mr-3"></i>المزيد من المعلومات</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                            <div class="video-open playbtn">
                                <img src="../images/play.png" class="play" alt="">
                                <span class="w-trailor video-btn " data-bs-toggle="modal"
                                      data-bs-target="#exampleModal<?php echo $i?>">مشاهدة البرومو</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
        } ?>
    </div>
</section>

<script>
    var myVideo = document.getElementById("video11");
    var mainpage = document.getElementsByClassName('mainm');
    var banner = document.getElementById('home');
    var checkit = document.getElementsByClassName('Feed-back');

    function toggle() {
        banner.classList.toggle('active');
        mainpage.classList.toggle('active');

    }

    function show_pup() {
        document.getElementById('wrapper').classList.add('open');
        toggle();
        myVideo.muted = false;
        myVideo.pause();
    }

    function hideit() {
        document.getElementById('wrapper').classList.remove('open');
        toggle();
        myVideo.play();
    }

</script>
<!-- slider ends -->

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/slick-animation.min.js"></script>

<script src="../js/main.js"></script>


<!-- Modal -->
<?php
$i=0;
foreach ($promosForSlider as $key => $row) {
?>
    <div class="modal fade bd-example-modal-lg" id="exampleModal<?php echo $i?>" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <script>
    $('#exampleModal<?php echo $i?>').on('hidden.bs.modal', function () {
        var html5Video = document.getElementById("video111");
        if (html5Video != null) {
            html5Video.pause();
            html5Video.currentTime = 0;
        }
    });
    </script>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <video width="100%" src="../Uploads/<?php echo $row ?>" type="video/mo4" controls loop id="video111"
                   class="video1">
            </video>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</div>


    <?php
$i++;
}?>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true" id="moreinfo">
    <div class="modal-dialog modal-lg">
        <div id="wrapper">

            <div id="right-panel">

                <div class="info">
                    <h1 class="MainName">  <?php
                        echo $names[0];
                        ?>
                    </h1>
                    <h5 class="mawsem">
                        <?php
                        echo $season[0];
                        ?>
                    </h5>


                    <h5 class="h2"><?php
                        echo $description[0];
                        ?>
                    </h5>

                </div>

            </div>


        </div>

    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true" id="moreinfo1">

    <div class="modal-dialog modal-lg">
        <div id="wrapper">
            <div id="right-panel">
                <div class="info">
                    <h6 class="MainName">  <?php
                        echo $names[1];
                        ?>
                    </h6>
                    <h5 class="mawsem">
                        <?php
                        echo $season[1];
                        ?>
                    </h5>

                    <div style="max-width: 15cm; max-height: 5cm">
                        <h5 class="h2"><?php
                            echo $description[1];
                            ?>
                        </h5>
                    </div>

                </div>

            </div>


        </div>

    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true" id="moreinfo2">

    <div class="modal-dialog modal-lg">
        <div id="wrapper">

            <div id="right-panel">

                <div class="info">
                    <h1 class="MainName">  <?php
                        echo $names[2];
                        ?>
                    </h1>
                    <h5 class="mawsem">
                        <?php
                        echo $season[2];
                        ?>
                    </h5>

                    <div style="max-width: 20cm; max-height: 5cm">
                        <h5 class="h2"><?php
                            echo $description[2];
                            ?>
                        </h5>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
<script>
    $('#play').on('hidden.bs.modal', function () {
        var html5Video = document.getElementById("video2");
        if (html5Video != null) {
            html5Video.pause();
            html5Video.currentTime = 0;
        }
    });
</script>
<div class="modal fade bd-example-modal-lg" id="play" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <script>
        $('#play').on('hidden.bs.modal', function () {
            var html5Video = document.getElementById("video2");
            if (html5Video != null) {
                html5Video.pause();
                html5Video.currentTime = 0;
            }
        });
    </script>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container">
                <div class="main-video-container">
                    <video src="../Uploads/" loop controls class="main-video"
                            preload="auto" id="video2"></video>
                    <h3 class="main-vid-title">الفيديو الرئيسي</h3>
                </div>
                <div class="video-list-container">
                    <template id="episodes-row-template">
                        <div class="list">
                            <video src="" class="list-video" id="video"></video>
                            <h3 class="list-title">
                        </div>
                    </template>
                </div>
            </div>
            <script>
                $(".video-list-container").on("click", ".list", function(e){
                    meaw(e)
                });
function meaw(e){
    const vid =  e.target;
    let videoList = document.querySelectorAll('.video-list-container');
    $(videoList).children().removeClass("active")
    $(vid).addClass('active');
    let src = vid.querySelector('.list-video').src;
    let title = vid.querySelector('.list-title').innerHTML;
    document.querySelector('.main-video-container .main-video').src = src;
    document.querySelector('.main-video-container .main-video').play();
    document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
}

            </script>

        </div>


    </div>


</div>

<script>
    includeHTML();

</script>
<?php include "Cultrual.php" ?>
<?php include "religion.php" ?>
<?php include "Haidf.php"?>
<?php include "Kids.php"?>




<section id="iq-topten">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="topten-contents">
                    <a class="main-title iq-title topten-title">
                        قريبًا
                    </a>
                    <ul id="top-ten-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                        <li class="slick-bg">
                            <a href="#">
                                <img src="../images/image.jpg" class="img-fluid w-100" alt="" />
                                <h6 class="iq-title"><a href="#">صناع الأمل</a></h6>
                            </a>
                        </li>
                        <li class="slick-bg">
                            <a href="#">
                                <img src="../images/82kSp8aKuCkmdQc5.jpg" class="img-fluid w-100" alt="" />
                                <h6 class="iq-title">
                                    <a href="#">رسالة</a>
                                </h6>
                            </a>
                        </li>
                        <li class="slick-bg">
                            <a href="#">
                                <img src="../images/برنامج-قمرة.jpg" class="img-fluid w-100" alt="" />
                                <h6 class="iq-title"><a href="#">قمرة</a></h6>
                            </a>
                        </li>
                        <li class="slick-bg">
                            <a href="#">
                                <img src="../images/maxresdefault%20(4).jpg" class="img-fluid w-100" alt="" />
                                <h6 class="iq-title"><a href="#">من الحقيقة الى القناع</a></h6>
                            </a>
                        </li>


                    </ul>
                    <div class="vertical_s">
                        <ul id="top-ten-slider-nav" class="list-inline p-0 m-0 d-flex align-items-center">
                            <li>
                                <div class="block-images position-relative">
                                    <a href="#">
                                        <img src="../images/image.jpg" class="img-fluid w-100" alt="" />
                                    </a>
                                    <div class="block-description">
                                        <h5>صناع الأمل</h5>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block-images position-relative">
                                    <a href="#">
                                        <img src="../images/82kSp8aKuCkmdQc5.jpg" class="img-fluid w-100" alt="" />
                                    </a>
                                    <div class="block-description">
                                        <h5>رسالة</h5>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block-images position-relative">
                                    <a href="#">
                                        <img src="../images/برنامج-قمرة.jpg" class="img-fluid w-100" alt="" />
                                    </a>
                                    <div class="block-description">
                                        <h5>قمرة</h5>


                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="block-images position-relative">
                                    <a href="#">
                                        <img src="../images/maxresdefault%20(4).jpg" class="img-fluid w-100" alt="" />
                                    </a>
                                    <div class="block-description">
                                        <h5>من الحقيقة الى القناع</h5>


                                    </div>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<li >
    <div class="tranding-block position-relative" id="thebestback" style="background-image: url(../images/4769656.png);" style="height: 550px;">
        <div class="trending-custom-tab" style="height: 850px;">

            <div class="tab-title-info position-relative" >
                <ul class="trending-pills  nav nav-pills justify-content-center align-items-center text-center" role="tablist" style="direction: rtl">
                    <li class="nav-item">
                        <a style="direction: rtl" href="#trending-data1" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true" onclick="changeBackgroundImage1()">
                            الرئيسية
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="direction: rtl" href="#trending-data2" class="nav-link" data-toggle="pill" role="tab" aria-selected="false" onclick="changeBackgroundImage();">
                            عن البرنامج
                        </a>
                    </li>
                    <li class="nav-item">
                        <a style="direction: rtl" href="#trending-data3" class="nav-link" data-toggle="pill" role="tab" aria-selected="false" data-bs-toggle="modal" data-bs-target="#ex">
                            البرومو
                        </a>
                    </li>

                </ul>
            </div>

            <div class="trending-content">

                <div id="trending-data1" class="overview-tab tab-pane fade active show">

                    <div class="trending-info align-items-center w-60 animated fadeInUp">

                        <a href="javascript:void(0);" tabindex="0">

                        </a>



                        <div class="p-btns">
                            <div class=" align-items-center ">
                                <a  data-bs-toggle="modal" data-bs-target="#play" onclick="playIt('X2Download.com-برنامج قلبي اطمأن _ إعلان الموسم الخامس-(1080p).mp4');loadSeriesEpisodes({name: 'قلبي اطمأن',season: '3'});
                                " href="#" class="btn btn-hover  iq-button2" tabindex="0" style="margin-left: 600px; margin-top: 150px; direction: rtl">
                                    <i class="fa fa-play mr-2"></i>
                                    تشغيل الآن
                                </a>

                            </div>
                        </div>

                    </div>

                    <script type="text/javascript">
                        function changeBackgroundImage1(){
                            var el= document.getElementById('thebestback').style.backgroundImage="url(../images/4769656.png";

                        }
                    </script>
                </div>
                <div id="trending-data2" class="overview-tab tab-pane fade active show">

                    <div class="trending-info align-items-center w-60 animated fadeInUp">

                        <a href="javascript:void(0);" tabindex="0">

                        </a>
                        <script type="text/javascript">
                            function changeBackgroundImage(){
                                var el= document.getElementById('thebestback').style.backgroundImage="url(../images/moreinfo2-02.png)";
                            }
                        </script>




                    </div>
                    <script>

                        function playIt(videoUrl) {
                            document.getElementById("video2").src = "<?=$upRoot?>" + videoUrl;
                        }

                        function loadSeriesEpisodes(movie) {
                            clearEpisodes();
                            console.log(movie.name);
                            fetch(`/webproject/apis/getSeriesEpisodes.php?name=${movie?.name}`)
                                .then(res=> res.json())
                                .then(episodes=>{
                                    appendEpisodes(episodes)
                                });
                        }
                        function clearEpisodes(){
                            document.getElementById("episodes-row-template").parentElement.querySelectorAll("div").forEach(n=>n.remove());
                        }

                        function appendEpisodes(episodes) {
                            console.log(episodes);
                            episodes.forEach(row => {
                                const template = document.getElementById("episodes-row-template").content.cloneNode(true);
                                template.querySelectorAll("#video")[0].src =  "<?=$upRoot?>" + row[4];
                               console.log(row[4]);
                                template.querySelectorAll(".list-title")[0].textContent = row.name;
                                document.getElementById("episodes-row-template").parentElement.append(template);
                            });
                        }

                    </script>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="ex" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script>
            $('#ex').on('hidden.bs.modal', function() {
                var html5Video = document.getElementById("video12");
                if (html5Video != null) {
                    html5Video.pause();
                    html5Video.currentTime = 0;
                }
            });
        </script>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">



                <video width="100%" src="../Uploads/بالقرآن%20اهتديت%20للشيخ%20فهد%20الكندري%20new%20promo%20Guided%20Through%20the%20Quran.mp4" type="video/mo4" controls loop id="video12" class="video1">
                </video>

            </div>

        </div>

</body>
</html>




