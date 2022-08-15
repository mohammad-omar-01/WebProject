<?php
session_start();
$user=$_SESSION['login_user'];
$_SESSION['PASSFLAG']=false;
$e=$_SESSION['email'];
$con = new mysqli("localhost", "root", "", "webdatabase");
$sql = "SELECT * FROM account WHERE user_name ='$user'";
$result = mysqli_query($con, $sql);
$first_name=$last_name=$phone="";

$passTap=false;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $phone = $row['phone'];
    $intrest = $row['intrest'];
    $str_arr = explode (",", $intrest);



}
if(isset($str_arr)){
    foreach ($str_arr as $value) {
        switch ($value) {
            case "Documentary":
                $Documentary=true;
                break;
            case "Entrepreneur":
                $Entrepreneur=true;
                break;
            case "Cultural":
                $Cultural=true;
                break;
            case "Religious":
                $Religious=true;
                break;
            case "Historical":
                $Historical=true;
                break;

        }
    }
}
?>
<?php
$conn = new mysqli("localhost", "root", "", "webdatabase");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_SESSION['login_user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['passButton'])) {
        $old = $_POST["oldpass"];
        $new = $_POST["newpass"];
        $new1 = $_POST["newpass1"];
    $sql = "SELECT * FROM users WHERE user_name ='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $a = $row['password'];
        if (password_verify($old, $a)) {
            if ($new === $new1) {
                $hash = password_hash($new1, PASSWORD_DEFAULT);
                $sql = "update users set password='$hash' where user_name='$username'";
                $result = mysqli_query($conn, $sql);

                $changed = "تم تغيير كلمة السر بنجاح";
                $color = "#00c300";


            } else {
                $passError = "كلمتا السر غير متطابقتين";
                $color = "#ff0000";


            }

        } else {
            $passError = "كلمة السر القديمة خاطئة";
            $color = "#ff0000";


        }
    }
    $conn->close();
?>
        <script>
    var cc = document . getElementById("passclick");
        window . onload = function () {
            var passTap = document . getElementById("password-tab");
            passTap . click(); // this will trigger the click event

        };

</script>
<?php


    }
    else if (isset($_POST['basicButton'])) {
    $fname = $_POST["fname"];
    $name = $_POST["lname"];
    $phone = $_POST["phone"];
    $sql = "update account set first_name='$fname', last_name='$name', phone='$phone' where user_name='$username'";
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT * FROM account WHERE user_name ='$user'";
        $result = mysqli_query($con, $sql);
        $first_name=$last_name=$phone="";
        $color="#00c300";
        $passTap=false;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $phone = $row['phone'];
            $color="#00c300";

        }

    }else{
        $intrest="";
        if(isset($_POST['intrestsButton'])){


            if(!empty($_POST['check'])) {

                foreach($_POST['check'] as $value){
                    $intrest=$intrest.",".$value;
                }

            }
            $sql = "update account set  intrest='$intrest' where user_name='$username'";
            $result = mysqli_query($con, $sql);
            $message="Done!";


            ?>
            <script>
                var cc = document . getElementById("intrestClick");
                window . onload = function () {
                        if(!window.location.hash) {
                            window.location = window.location + '#loaded';
                            window.location.reload();

                    }
                    var passTap = document . getElementById("notification-tab");
                    passTap . click(); // this will trigger the click event
                };

            </script>
            <?php


        }





    }



}
?>

<?php include "header.php" ?>

<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Account Settings UI Design</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Accountset.css">
</head>
<script>
    function removeAll(){
        document.getElementById("info").innerHTML="";
    }
</script>
<body>

<section class="py-5 my-5">
    <div class="container">
        <div class="bg-white shadow rounded-lg d-block d-sm-flex">
            <div class="profile-tab-nav border-right">
                <div class="p-4">
                    <div class="img-circle text-center mb-3">
                        <img src="../../images/user1.jpg" alt="Image" class="shadow">
                    </div>
                    <h4 class="text-center" style="direction: ltr"><?php
                        echo $_SESSION['login_user'];
                        ?></h4>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true" onclick="removeAll()">
                        <i class="fa fa-home text-center mr-1"></i>
                        الحساب
                    </a>
                    <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false" onclick="removeAll()">
                        <i class="fa fa-key text-center mr-1"></i>
                        كلمة السر
                    </a>
                    <a class="nav-link" id="notification-tab" data-toggle="pill" href="#intrests" role="tab" aria-controls="notification" aria-selected="false" onclick="removeAll()">
                        <i class="fa fa-television text-center mr-1"></i>
                        اهتمامتي
                    </a>
                </div>

            </div>
            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <h3 class="mb-4">اعدادات الحساب</h3>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                    <label>الاسم الأول</label>
                                    <input type="text" class="form-control dir" value="<?php
                                          echo $first_name;
                                          ?>" name="fname">
                                      </div>
                                  </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>الاسم الأخير</label>
                                <input type="text" class="form-control dir2" value="
                                <?php
                                echo trim($last_name,"");
                                ?>"
                                name="lname" style="direction: rtl; justify-content: " >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>بريدك الإلكتروني</label>
                                <input type="text" class="form-control"  style="direction: ltr" value= "
<?php
                                echo $e;
                                ?>
" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" >
                                <label>رقم الهاتف</label>
                                <input style="direction: ltr" type="tel" class="form-control" value="
<?php echo $phone;?>
" name="phone">
                            </div>
                        </div>

                    </div>
                    <div class="styleButton">
                        <input type="submit"  class="btn btn-primary"  value="تحديث" name="basicButton">
                        <button class="btn btn-light">إلغاء</button>
                        <h6 id="info" class="passErorr" style="direction: rtl; margin-right: 4cm; position: absolute; color:green; font-size:12px;border-top-width:44px;top: 390px;">
                            <?php
                            if(isset($color)){
                                echo "تم تحديث بياناتك بنجاح";
                            }
                            else{
                                echo "";
                            }


                            ?>
                        </h6>
                    </div>
                        </form>
                </div>
                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <h3 class="mb-4">تغيير كلمة السر</h3>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>كلمة السر القديمة</label>

                                <input type="password" class="form-control" name="oldpass" id="oldpass" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>كلمة السر الجديدة</label>
                                <input type="password" class="form-control" name="newpass" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>أعد ادخال كلمة السر الجديدة</label>
                                <input type="password" class="form-control" name="newpass1" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="styleButton">
                        <input type="submit"  id="passclick" class="btn btn-primary" value="تحديث" name="passButton">
                        <button class="btn btn-light">إلغاء</button>
                        <h6 id="info" class="passErorr" style="direction: rtl; margin-right: 4cm; position: absolute; color:<?php echo $color?>; font-size:12px;top: 390px;">
                            <?php
                            if(isset($passError)){
                                echo $passError;
                            }
                            elseif (isset($changed)){
                                echo $changed;

                            }

                            ?>
                        </h6>

                    </div>

                    </form>
                </div>

                <div class="tab-pane fade" id="intrests" role="tabpanel" aria-labelledby="security-tab">
                    <h3 class="mb-4">اختر اهتمامتك </h3>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group" style="direction: rtl">
                                <div class="form-check" style="direction: ltr">
                                    <input style="direction: rtl" class="form-check-input" type="checkbox" value="Documentary" name="check[]" <?php
                                    if(isset($Documentary)&&$Documentary==true)
                                     echo" checked ";
                                    ?>>
                                    <label style="direction: rtl" class="form-check-label" for="documentary">
                                        وئائقي
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-check" style="direction: ltr">
                                    <input style="direction: rtl" class="form-check-input" type="checkbox" value="Entrepreneur"
                                        <?php
                                        if(isset($Entrepreneur))
                                            echo"checked ";
                                        ?>
                                           name="check[]"
                                       >
                                    <label style="direction: rtl" class="form-check-label" for="entrepreneur" style="margin-bottom: 66px">
                                        ريادي
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-check" style="direction: ltr">
                                    <input style="direction: rtl" class="form-check-input" type="checkbox" value="Cultural"<?php
                                    if(isset($Cultural)&&$Cultural=true)
                                        echo"checked ";
                                    else echo"";
                                    ?> name="check[]">
                                    <label style="direction: rtl" class="form-check-label" for="cultural">
                                        ثقافي
                                    </label>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-check" style="direction: ltr">
                                    <input style="direction: rtl" class="form-check-input" type="checkbox" value="Historical"<?php
                                    if(isset($Historical))
                                        echo"checked ";
                                    ?>  name="check[]">
                                    <label style="direction: rtl" class="form-check-label" for="historical">
                                        تاريخي
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="form-check" style="direction: ltr">
                                    <input class="form-check-input" type="checkbox" value="Religious"<?php
                                    if(isset($Religious))
                                        echo"checked ";
                                    ?>  name="check[]">
                                    <label style="direction: rtl" class="form-check-label" for="religious">
                                        ديني
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="styleButton">
                        <div style="height: 2cm"></div>
                        <input type="submit" id="intrestClick" class="btn btn-primary"  value="تحديث" name="intrestsButton">
                        <button class="btn btn-light">إلغاء</button>

                    </div>
                    <h6 id="info" class="passErorr" style="direction: rtl; margin-right: 4cm; position: absolute; color:green; font-size:12px;top: 390px;">
                        <?php
                        if(isset($message)) {
                            echo "تم التحديث بنجاح";
                        }

                        ?>
                    </h6>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>