
<?php
session_start();
if (!isset($webroot)) {
    $webroot = "../../";

}
if(!isset( $_SESSION['login_user'])){
    header('location:' .$webroot.'index.php');
    exit;
} else {


}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Streaming</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- i will provide this in description  -->
    <link rel="stylesheet" href="../../css/slick.css" />
    <link rel="stylesheet" href="../../css/slick-theme.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../css/animate.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/select2.min.css" />
    <link rel="stylesheet" href="../../css/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="../../css/sliderrr.css" />
    <link rel="stylesheet" href="../../css/videoplaylist.css  " />

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
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4) {
                            if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                            if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
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

    <meta name = "" , content="width = device=width , initial-scale =1.0">
    <meta charset="UTF-8">
    <title>  Home Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\lenoi\PhpstormProjects\font-awesome-4.7.0/css/font-awesome.min.css">
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
</head>
<body class="mainm"id="hh">

<header>
    <nav class="navigation" id="myTopnav">
        <a href="#" class="logo">
            <img src="../images/نهضة2.png">
            <u1 >
                <li> <a href="#"> الرئيسية </a> </li>
                <li> <a href="#">بودكاست</a> </li>
                <li> <a href="#">لطفلك</a> </li>
                <li> <a href="#">من نحن</a> </li>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                </a>
                <div class="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="بحث">
                </div>

                <li>
                    <div class="dropdown">
                        <a href="#" class="iq-user-dropdown search-toggle  align-items-center">
                            <img src="../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
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
                            <?php
                            if(isset( $_SESSION['login_user'])&& $_SESSION['login_user']==="Mohammad Omar"){
                                ?>
                                    <script>
                                        console.log("HIIIIIIIIIIII");
                                    </script>
                            <a href="adminpage.php" class="">
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
                            <a href="" class="">
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

<section id="home" class="iq-main-slider p-0">

    <div id="home-slider" class="slider m-0 p-0  " id="slider">

        <div class="slide slick-bg s-bg-1">

            <div class="container-fluid position-relative h-100">

                <div class="slider-inner h-100">

                    <div class="row align-items-center h--100">

                        <div class="col-xl-150 col-lg-12 col-md-12">

                            <a href="javascript:void(0)">

                                <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                    <img src="../images/Logo_alrwaad.png" class="c-logo" alt="" />
                                </div>
                            </a>
                            <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                data-delay-in="0.6">

                            </h1>

                            <div class="d-flex flex-wrap align-items-right fadeInLeft animated" data-animation-in="fadeInLeft">
                                <div class="infoo" >
                                    <div class="slider-ratting d-flex align-items-center mr-50 mt-20 mt-md-3">


                                    </div>


                                    <div class="d-flex align-items-center mt-2 mt-md-3">
                                    </div>

                                    <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                                        <div class="text-primary title starring">
                                            تقديم :
                                            <span class="text-body">أحمد الشقيري</span>
                                        </div>
                                        <div class="text-primary title genres">
                                            النوع : <span class="text-body">ريادي</span>
                                        </div>
                                        <div class="text-primary title tag">
                                            المدة :
                                            <span class="text-body">01 حلقات</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="d-flex align-items-center r-mb-22 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <a href="#" class="btn btn-hover iq-button video-btn" data-bs-toggle="modal" data-bs-target="#play " ><i class="fa fa-play mr-3" ></i>تشفيل الآن</a>
                                <a href="#"  onclick="show_pup()" class="btn btn-hover iq-button  video-btn" data-bs-toggle="modal" data-bs-target="#moreinfo" ><i class="fa fa-play mr-3" ></i>المزيد من المعلومات</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                        <div class="video-open playbtn">
                            <img src="../images/play.png" class="play" alt="" >
                            <span class="w-trailor video-btn " data-bs-toggle="modal" data-bs-target="#exampleModal"    >مشاهدة البرومو</span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slick-bg s-bg-2">
            <div class="container-fluid position-relative h-100">
                <div class="slider-inner h-100">
                    <div class="row align-items-center h--100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <a href="javascript:void(0)">
                                <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                    <img src="../images/logo.png" class="c-logo" alt="" />
                                </div>
                            </a>
                            <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                data-delay-in="0.6">
                                Frozen
                            </h1>
                            <div class="d-flex flex-wrap align-items- fadeInLeft animated" data-animation-in="fadeInLeft"
                                 style="opacity: 1">
                                <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                    <ul
                                            class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul>
                                    <span class="text-white ml-2">7.4(imbd)</span>
                                </div>
                                <div class="d-flex align-items-center mt-2 mt-md-3">
                                    <span class="badge badge-secondary p-2">13+</span>
                                    <span class="ml-3">1h 42min</span>
                                </div>
                            </div>
                            <p data-animation-in="fadeInUp">
                                When the newly crowned Queen Elsa accidentally uses her
                                power to turn things into ice to curse her home in infinte
                                winter, her sister Anna teams up with a mountain man, his
                                playful reindeer, and a snowman to change the weather
                                condition.
                            </p>
                            <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <div class="text-primary title starring">
                                    Starring :
                                    <span class="text-body">Kristan Bell, Idina menzel, Jonathan Groff</span>
                                </div>
                                <div class="text-primary title genres">
                                    Genres : <span class="text-body">Animation</span>
                                </div>
                                <div class="text-primary title tag">
                                    Tags :
                                    <span class="text-body">Animation, Adventure, Comedy</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Play Now</a>
                                <a href="#" class="btn btn-link">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                        <a href="../video/trailer.mp4" class="video-open playbtn">
                            <img src="../images/play.png" class="play" alt="" />
                            <span class="w-trailor">Watch Trailer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slick-bg s-bg-3">
            <div class="container-fluid position-relative h-100">
                <div class="slider-inner h-100">
                    <div class="row align-items-center h--100">
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <a href="javascript:void(0)">
                                <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                    <img src="../images/logo.png" class="c-logo" alt="" />
                                </div>
                            </a>
                            <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                                data-delay-in="0.6">
                                The Conjuring
                            </h1>
                            <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                                 style="opacity: 1">
                                <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                    <ul
                                            class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star-half"></i></li>
                                    </ul>
                                    <span class="text-white ml-2">7.5(imbd)</span>
                                </div>
                                <div class="d-flex align-items-center mt-2 mt-md-3">
                                    <span class="badge badge-secondary p-2">16+</span>
                                    <span class="ml-3">1h 52min</span>
                                </div>
                            </div>
                            <p data-animation-in="fadeInUp">
                                Paranomal investigators Ed and Lorraine Warren work to help
                                a family terrorized by a dark presence in their farmhouse.
                            </p>
                            <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <div class="text-primary title starring">
                                    Starring :
                                    <span class="text-body">Patrick Wilson, Vera Farminga, Ron Livingston</span>
                                </div>
                                <div class="text-primary title genres">
                                    Genres : <span class="text-body">Horror</span>
                                </div>
                                <div class="text-primary title tag">
                                    Tags :
                                    <span class="text-body">Horror, Mystery, Thriller</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                                <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Play Now</a>
                                <a href="#" class="btn btn-link">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                        <a href="../video/trailer.mp4" class="video-open playbtn">
                            <img src="../images/play.png" class="play" alt="" />
                            <span class="w-trailor">Watch Trailer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var myVideo=document.getElementById("video11");
    var mainpage=document.getElementsByClassName('mainm');
    var banner=document.getElementById('home');
    var checkit=document.getElementsByClassName('Feed-back');

    function  toggle(){
        banner.classList.toggle('active');
        mainpage.classList.toggle('active');

    }
    function show_pup(){
        document.getElementById('wrapper').classList.add('open');
        toggle();
        myVideo.muted=false;
        myVideo.pause();
    }
    function hideit(){
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
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <script>
        function  loadItem(id){
            fetch("home.php?id=" +id)
                .then(res=>res.json())
                .then(item => {
                    console.log(item.id , item);
                    const fieldNames = ["name" , "type" , "description","episode", "season" , "category" , "id"];
                    fieldNames.forEach(fieldName=>{
                        document.forms["editItem"][fieldName].value = item[fieldName];
                    });

                    // image-photo
                })

        }
        $('#exampleModal').on('hidden.bs.modal', function() {
            var html5Video = document.getElementById("video11");
            if (html5Video != null) {
                html5Video.pause();
                html5Video.currentTime = 0;
            }
        });
    </script>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">



            <video width="100%" src="../video/y2meta.com-الرواد%20_%20برومو%20مع%20أحمد%20الشقيري-(1080p).mp4" type="video/mo4" controls loop id="video11" class="video1">
            </video>

        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="moreinfo">
    <script>
        $('#exampleModal').on('hidden.bs.modal', function() {
            var html5Video = document.getElementById("video");
            if (html5Video != null) {
                html5Video.pause();
                html5Video.currentTime = 0;
            }
        });
    </script>
    <div class="modal-dialog modal-lg">
        <div id="wrapper">

            <div id="right-panel">

                <div class="info">
                    <h1 class="MainName">  الرواد
                    </h1>
                    <h5 class="mawsem">
                        الموسم الأول
                    </h5>


                    <h5 class="h2">
                        برنامج احمد الشقيري الرواد الحلقة 4 الرابعة في رمضان 2022 ، ويطلب الجمهور الكريم في الوطن العربي في هذه الساعات من اليوم الأربعاء الموافق 20-4-2022 عبر مواقع التواصل الاجتماعي والمنصات الرقمية رابط مشاهدة الحلقة الجديدة من برنامج الرواد للمقدم الإعلامي احمد الشقيري ، المعروف لدى كافة الجمهور العربي للمتابعين لقناة mbc وقناته على اليوتيوب في برنامجه الشهير الذي يتناول فيه قصص وحكايات جميلة جدا تسر جميع المشاهدين ، ووضع لكم فريق فلسطين اليوم التفاصيل كاملة هنا .

                        هذه المشاهد دفع الجمهور إلى مشاهدة برنامج احمد الشقيري
                    </h5>

                </div>

            </div>


        </div>

    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="play"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <script>
        $('#play').on('hidden.bs.modal', function() {
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
                    <video src="../video/y2meta.com-الرواد%20_%20برومو%20مع%20أحمد%20الشقيري-(1080p).mp4" loop controls class="main-video"  id="video2"></video>
                    <h3 class="main-vid-title">الفيديو الرئيسي</h3>
                </div>

                <div class="video-list-container">
                    <div class="list active">
                        <video src="../video/y2meta.com-الرواد%20_%20برومو%20مع%20أحمد%20الشقيري-(1080p).mp4" class="list-video"></video>
                        <h3 class="list-title">الحلقة الأولى</h3>
                    </div>
                    <div class="list ">
                        <video src="../video/y2meta.com-برومو%20برنامج%20رمضان%20%20١٤٤٣هـ%20_%20فهد%20الكندري-(1080p).mp4" class="list-video"></video>
                        <h3 class="list-title">الحلقة الثانية</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-2.mp4" class="list-video"></video>
                        <h3 class="list-title">الحلقة الثالثة</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-3.mp4" class="list-video"></video>
                        <h3 class="list-title">الحلقة الرابعة</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-4.mp4" class="list-video"></video>
                        <h3 class="list-title">الحلقة الخامسة</h3>
                    </div>



                    <div class="list">
                        <video src="images/vid-6.mp4" class="list-video"></video>
                        <h3 class="list-title">door hinge animation</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-7.mp4" class="list-video"></video>
                        <h3 class="list-title">poeple walking in town animation</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-8.mp4" class="list-video"></video>
                        <h3 class="list-title">knight chasing virus animation</h3>
                    </div>

                    <div class="list">
                        <video src="images/vid-9.mp4" class="list-video"></video>
                        <h3 class="list-title">3D helicopter animation</h3>
                    </div>

                </div>
            </div>
            <script >
                let videoList = document.querySelectorAll('.video-list-container .list');

                videoList.forEach(vid =>{
                    vid.onclick = () =>{
                        videoList.forEach(remove =>{remove.classList.remove('active')});
                        vid.classList.add('active');
                        let src = vid.querySelector('.list-video').src;
                        let title = vid.querySelector('.list-title').innerHTML;
                        document.querySelector('.main-video-container .main-video').src = src;
                        document.querySelector('.main-video-container .main-video').play();
                        document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
                    };
                });
            </script>

        </div>



    </div>
    ]

</div>
</div>









<script>
    includeHTML();

</script>




</body>

</html>



