<?php

session_start();


if (!isset($webroot)){
    $webroot = "../../";

}


?>

<?php
include($webroot.'pages/login/signup.php') ;
?>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="styles/style.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">


            <form action="<?=$webroot?>pages/login/login.php" class="sign-in-form" method="POST" >
                <h2 class="title">سجّل دخولك الآن</h2>
                <?php if (isset($_GET['LoginMessage'])) {?>
                    <div style="color:red" > <?=$_GET['LoginMessage']?></div>
                <?php }?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="البريد الإلكتروني" name="email"  id="email" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="كلمة السر" name="password"   required/>

                </div>
                <input type="submit" value="دخول" class="btn solid" />
                <p class="social-text">سجّل دخولك باستخدام مواقع التواصل الإجتماعي</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
            <form action="<?=$webroot?>pages/login/signup.php" class="sign-up-form" method="POST">
                <h2 class="title">انشاء حساب</h2>
                <?php if (isset($_GET['errorMessage'])) {?>
                    <div style="color:red" > <?=$_GET['errorMessage']?></div>
                <?php }?>
                <?php if (isset($_GET['signupmode']) && $_GET['signupmode'] == 'yes') {?>
                    <div style="color:green" >Successfully Registered !</div>
                <?php }?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="اسم المستخدم" name="username" required/>

                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="البريد الالكتروني" name="email" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="كلمة السر" name="password" required/>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="أعد ادخال كلمة السر" name="password2" required/>
                </div>
                <input type="submit" class="btn" value="انشئ حسابك الآن" name="signup-button" />
                <p class="social-text">انضم إلينا عن طريق وسائل التواصل</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>لم تلحق بنا حتى الآن؟</h3>
                <p>
                    انضم إلينا لمتابعة كل ما يجد ويستجد من محتوى هادف ونظيف
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    إنضم إلينا الآن
                </button>
            </div>
            <img src="images/SigninPannel.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>بالفعل فرد من عائلتنا؟</h3>
                <p>
                    قم بالدخول لبيتك الآن، لترى كل محتويات هذا الاسبوع الجديدة والقيّمة كعادتها
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    ادخل الآن
                </button>
            </div>
            <img src="images/SignUpPannel.svg" class="image" alt="" />
        </div>
    </div>
</div>
<?php if(!isset($_GET['signupmode']))$signup ='N'; else $signup= 'Y'  ;
if(!isset($_GET['hasErrors']))$hasError ='N' ;else $hasError='Y' ;

if($hasError=='Y')
{
    echo "
            <script>
            const mycontainer = document.querySelector('.container');  
            console.log('here here 123');  
            mycontainer.classList.add('sign-up-mode');
            </script>
        ";
}
else if($signup=='Y') {   echo "
            <script>
            const mmcontainer = document.querySelector('.container');  
            console.log('here here 1234');  
              mmcontainer.classList.add('sign-up-mode');
              setTimeout(() => {mmcontainer.classList.remove('sign-up-mode'); }, 500);
              
            </script>
        ";}
?>
<script src="app.js"></script>
</body>
