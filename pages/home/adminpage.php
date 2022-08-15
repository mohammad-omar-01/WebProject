<?php
session_start();

include "handleSubmitting.php";

?>
<html dir="rtl" lang="ar">

<head>
    <meta name="" , content="width = device=width , initial-scale =1.0">
    <meta charset="UTF-8">
    <title>Adminpage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type='text/javascript'
            src='http://code.jquery.com/jquery-1.10.1.js'></script>
    <script type='text/javascript'
            src='http://code.jquery.com/jquery-1.10.1.js'></script>
    <link rel="stylesheet" type="text/css"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
          integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\Users\lenoi\PhpstormProjects\font-awesome-4.7.0/css/font-awesome.min.css">
    <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous"
    ></script>

</head>

<body>
   



<div class="container" dir="rtl" style="top:6cm;margin-right: -3cm">
    <button style="margin-top:100px;margin-right: 5cm" type="button" class="btn btn-primary" data-toggle="modal" id="modal2"
            data-target="#addItemModal">إضافة فيديو
    </button>
    <button onclick="location.href='../../HTMLs/Home.php';"style="margin-top:100px" type="button" class="btn btn-primary" data-toggle="modal" id="modal2">
          
          التحويل لمستخدم عادي
          </button>

</div>
<?php


$con = new mysqli("localhost", "root", "", "webdatabase");
$query = $con->query("select * from  videos");

if (!$query) {

    echo "No Results....";
}
$rowNums = $query->num_rows;
$i = 0;
$searchResultRows = [];
while ($i < $rowNums) {
    $r = $query->fetch_assoc();
    array_push($searchResultRows, $r);
    $i = $i + 1;
};
?>
<?php $i = 0;
if (isset($searchResultRows)) { ?>

    <table class="styled-table" id="myTable" style="width:35cm; margin-top:10px">

        <tr class="header">

            <td class="align-right" style="width: 100px">عدل</td>
            <td class="align-middle">الإسم</td>
            <td class="align-middle">الصورة</td>
            <td class="align-middle">اللوجو</td>
            <td class="align-middle">الفيديو</td>
            <td class="align-middle">الوصف</td>
            <td class="align-middle">النوع</td>
            <td class="align-middle">الموسم</td>
            <td class="align-middle">الحلقة</td>
        </tr>
        <tbody>
        <?php foreach ($searchResultRows as $key => $row) { ?>
            <tr class="active-row">
                <td>
                    <a href='#' data-toggle='modal' data-target='#editItemModal'
                       style='background-color:white;height: 28px;padding: 0px' onclick="loadItem(<?= $row["id"] ?>)">
                        <i class='fa fa-pencil' aria-hidden='true' style='color:green'></i>
                    </a>
                    <button title='' type='button' onclick="deleteIt(<?= $row["id"]; ?>)" class='btn btn-danger remove show_tip'
                            data-original-title='Remove from list'
                            style='background-color:white; border: none; margin-right: 10px'>
                        <i class='fa fa-trash-o' style='color: red'></i>
                </td>
                <td> <?= $row["name"]; ?> </td>
                <td>  <?= $row["cover"]; ?> </td>
                <td>  <?= $row["logo"]; ?> </td>
                <td>  <?= $row["video"]; ?> </td>
                <td style="word-wrap: break-word;">  <?= $row["description"]; ?> </td>
                <td>  <?= $row["type"]; ?> </td>
                <td>  <?= $row["episode"]; ?> </td>
                <td>  <?= $row["season"]; ?> </td>
                <td>  <? var_dump($row); ?> </td>


            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>


<?php include "addItemForm.php" ?>
<?php include "editItemForm.php" ?>

</body>
</html>
<script type="text/javascript">

    function  loadItem(id){
        fetch("getItemById.php?id=" +id)
        .then(res=>res.json())
        .then(item => {
            console.log(item.id , item);
            const fieldNames = ["name" , "type" , "description","episode", "season" , "category" , "id"];
            fieldNames.forEach(fieldName=>{
                document.forms["editItem"][fieldName].value = item[fieldName];
            });
            $("form[name='editItem']").find(".image-photo").prop("src","/webproject/Uploads/"+item.photo);
            $("form[name='editItem']").find(".image-logo").prop("src","/webproject/Uploads/"+item.logo);
            $("form[name='editItem']").find(".image-video").prop("src","/webproject/Uploads/"+item.video);
            // image-photo
        })

    }
    function deleteIt(id) {

        console.log("id is : " + id);
        fetch("deleteItem.php?id=" +id);
    }


    $(window).load(function () {<!--from   w  w  w.  ja v a 2s.  c  om-->
        $(function () {
            $("table#myTable").on("click", ".remove", function () {
                $(this).closest('tr').remove();
            });
        });
        $(function () {
            $(".show_tip").tooltip({
                container: 'body'
            });
        });
        $(document).click(function () {
            $('.tooltip').remove();
            $('[title]').tooltip();
        });
    });
</script>
<script type='text/javascript'>
    $(function () {

        $("#click").click(function () {
            var row = $("<tr><td>1</td><td>E</td><td>E</td><td>E</td></tr>");
            $("#myTable > tbody").append(row);
        });

    });
</script>

<style>
    .fa-trash {
        margin-bottom: -10px;
    }

    * {
        direction: rtl;
        font-family: "Sukar Bold", sans-serif;
    }

    @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");
    @font-face {
        font-family: 'Sukar Regular';
        font-style: normal;
        font-weight: normal;
        src: local('Sukar Regular'), url('../../font/SukarRegular.woff') format('woff');
    }

    .styled-table tr:nth-child(8) td:nth-child(3) {
        background-color: red;
    }


    @font-face {
        font-family: 'Sukar Bold';
        font-style: normal;
        font-weight: normal;
        src: local('Sukar Bold'), url('../../font/SukarBold.woff') format('woff');
    }


    @font-face {
        font-family: 'Sukar black';
        font-style: normal;
        font-weight: normal;
        src: local('Sukar black'), url('../../font/SukarBlack.woff') format('woff');
    }

    table td:nth-child(2) {
        border-right: 1px solid #009879;
    }

    a:link, a:visited {
        background-color: #f44336;
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 4cm 2.3cm;
        width: 45cm;
        font-size: 0.9em;
        font-family: "Sukar Regular";
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: right;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    th {
        display: flow;
    }

    .row {
        display: flex;
    }
</style>