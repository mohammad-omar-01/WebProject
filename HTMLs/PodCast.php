
<?php
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .galleryC {
            transition: transform .5s;
            width: 7%;
            margin: 1%;
        }
        .galleryR>.galleryC{
            flex: 1;
        }
        .galleryC:hover {
            transform: scale(1.2);
        }
        .galleryR{
            display: flex;
            justify-content: space-between;
            height: 200px;
            margin-top: 75px;
        }
        .galleryR::after{
            content: "";
            clear: both;
            display: table;
        }

        div.desc {
            background-color: #0093AB;
            flex-direction: column;
            flex: 1;
            border-radius: 10px;
        }
        .desc>p{
            padding: 5px;
            font-size: 12px;
            justify-content: center;
            align-self: flex-start;
            text-wrap: normal;
        }
        .desc>h2{
            justify-content: flex-start;
            align-self: flex-start;
            padding: 5px;
            margin-top: 10px;
            margin-left: 10px;
            font-size: 100%;
        }
        .responsive {
            width: 100%;
        }
        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
        .btn{
            background-color: #00AFC1;
            border-radius: 15px;
            text-align: center;
            float: left;
            width: 30px;
            height: 30px;
        }
        img{
            border-radius: 10px;
        }
    </style>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Streaming</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/slick.css" />
    <link rel="stylesheet" href="../css/slick-theme.css" />
    <link rel="stylesheet" href="../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../css/animate.min.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <link rel="stylesheet" href="../css/select2.min.css" />
    <link rel="stylesheet" href="../css/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="../css/slider.css" />
    <link rel="stylesheet" href="../css/videoplaylist.css  " />
    <link rel="stylesheet" href="../css/slick-animation.css" />
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /* Loop through a collection of all HTML elements: */
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /search for elements with a certain atrribute:/
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
    <link rel="stylesheet" href="../css/styles.css">
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
        <a href="Home.php" class="logo">
            <img src="../images/نهضة2.png">
            <u1 >
                <li> <a href="Home.php"> الرئيسية </a> </li>
                <li> <a href="PodCast.php">بودكاست</a> </li>
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

<div class="responsive">
    <div class="galleryR">

        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a  href="podca-gh-pages/videoht.php">
                <img src="../images/artworks-000637381330-fycivh-t500x500.jpg" alt="shawshank"width="100%" onclick="function f() {

                    }">
            </a>
            <div class="desc" id="p1" style="display: none;   direction: rtl;">
                <h2 style="font-family: Sukar ">بعد أمس </h2>
                <p style="font-family: Sukar">  </p>

            </div>

        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/index.php">
                <img src="../images/41dO1SVsTKL._SL500_.jpg" alt="the prestige"width="100%">
            </a>
            <div class="desc" id="p2" style="display: none;   direction: rtl;">
                <h2 style="font-family: Sukar">أثر الفراشة</h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/index2.php">
                <img src="../images/Business_wars_aljazeera_podcasts-1.png" alt="1917"width="100%">
            </a>
            <div class="desc" id="p3" style="display: none ;   direction: rtl;">
                <h2 style="font-family: Sukar">حروب الأعمال</h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/index.php">
                <img src="../images/artworks-6bvbaZJyglLWSIPI-SocZWQ-t500x500.jpg" alt="the dark knight"width="100%">

            </a>
            <div class="desc" id="p4" style="display: none">
                <h2 style="font-family: Sukar;   direction: rtl; ">حكايات حرب</h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/index.php">
                <img src="../images/download%20(1).jpg" alt="inception"width="100%">
            </a>
            <div class="desc" id="p5" style="display: none">
                <h2 style="font-family: Sukar ;   direction: rtl; ">العدو المشترك</h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/index.php">
                <img src="../images/Lahtha_aljazeera_podcasts.png" alt="the godfather"width="100%">
            </a>
            <div class="desc" style= "direction: rtl;display: none"  >
                <h2 style="font-family: Sukar">لحظة</h2>
                <p style="font-family: Sukar">لحظة</p>

            </div>
        </div>



    </div>
    <div class="galleryR">

        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/artworks-000637381330-fycivh-t500x500.jpg" alt="shawshank"width="100%">
            </a>
            <div class="desc" id="p1" style="display: none">
                <h2 style="font-family: Sukar "> </h2>
                <p style="font-family: Sukar"></p>

            </div>

        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/41dO1SVsTKL._SL500_.jpg" alt="the prestige"width="100%">
            </a>
            <div class="desc" id="p2" style="display: none">
                <h2 style="font-family: Sukar"></h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/Business_wars_aljazeera_podcasts-1.png" alt="1917"width="100%">
            </a>
            <div class="desc" id="p3" style="display: none">
                <h2 style="font-family: Sukar"></h2>
                <p style="font-family: Sukar"> </p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/artworks-6bvbaZJyglLWSIPI-SocZWQ-t500x500.jpg" alt="the dark knight"width="100%">

            </a>
            <div class="desc" id="p4" style="display: none">
                <h2 style="font-family: Sukar"></h2>
                <p style="font-family: Sukar"></p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/download%20(1).jpg" alt="inception"width="100%">
            </a>
            <div class="desc" id="p5" style="display: none">
                <h2 style="font-family: Sukar"></h2>
                <p style="font-family: Sukar">  </p>

            </div>
        </div>
        <div class="galleryC" onmouseover="this.childNodes[3].style.display='flex'"onmouseout="this.childNodes[3].style.display='none'">
            <a href="podca-gh-pages/podca-gh-pages/index.php">
                <img src="../images/Lahtha_aljazeera_podcasts.png" alt="inception"width="100%">
            </a>
            <div class="desc" id="p5" style="display: none">
                <h2 style="font-family: Sukar"></h2>
                <p style="font-family: Sukar">  </p>

            </div>
        </div>



    </div>


</div>


</body>
</html>
