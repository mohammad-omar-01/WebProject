<?php
?>
<!DOCTYPE html >

<head>
        <meta charset="UTF-8">
        <title>Account Settings UI Design</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function removeAll(){
            document.getElementById("info").innerHTML="";
        }
    </script>
    <script src="https://www.w3schools.com/lib/w3data.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=user-scalable" />
    <title>Video Streaming</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/slick.css" />


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
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>
</head>
<body class="mainm"id="hh">
<header>
    <nav class="navigation" id="myTopnav">
        <a href="#" class="logo">
            <img src="../../images/نهضة2.png">
            <u1 >
                <li> <a href="../../HTMLs/Home.php"> الرئيسية </a> </li>
                <li> <a href="../../HTMLs/PodCast.php">بودكاست</a> </li>
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
                            <img src="../../images/user/user.png" class="img-fluid user-m rounded-circle" alt="" />
                        </a>

                        <div class="dropdown-content">


                            <a href="AccountSett.php" class="">
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
                            if(isset( $_SESSION['login_user']) && $_SESSION['login_user']==="Mohammad Omar"){
                                ?>
                                <a href="../home/adminpage.php" class="">
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
                            <a href="../login/logout.php" class="">
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
</body>


