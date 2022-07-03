<?php
session_start();
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
} else {
    header('Location: ' . '/Tourism/user/loginUser');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Tourism/views/styles/journey.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>تجربه ی سفر جدید</title>
</head>

<body>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form method="post" id="form1" enctype="multipart/form-data">
                <i class='fas fa-comment-dollar'></i>&nbsp;<label for="costs">هزينه های سفر : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="costs" rows="2"></textarea>
                <i class='fas fa-place-of-worship'></i>&nbsp;<label for="suggest">مکان های پیشنهادی : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="suggest" rows="2"></textarea>
                <i class="material-icons">&#xe535;</i>&nbsp;<label for="trans">نحوه جابه جایی در شهر : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="trans" rows="2"></textarea>
                <i class='fas fa-comment'></i>&nbsp;<label for="others">توضیحات دیگر : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="others" rows="2"></textarea>
            </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form method="post" id="form2" enctype="multipart/form-data">
                <i class='fas fa-ad fa-1x'></i>&nbsp;<label for="fadd"> آدرس کامل : </label>
                <!-- <input type="text" name="fadd" id="fadd"> -->
                <textarea class="form-control" id="fadd" rows="2"></textarea>

                <i class='far fa-building'></i>&nbsp;<label for="his">تاریخچه بنا های دیده شده : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="his" rows="2"></textarea>
                <i class="material-icons">&#xe7fb;</i>&nbsp;<label for="cul">فرهنگ مردم : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="cul" rows="2"></textarea>
                <i class="material-icons">&#xe32a;</i>&nbsp;<label for="sec">نکات امنیتی : </label>
                <!-- <input type="text" name="costs" id="costs"> -->
                <textarea class="form-control" id="sec" rows="2"></textarea>
            </form>
        </div>
        <!-- <div class="form-group">
            <label for="FormControlFile">بارگذاري تصاوير سفر</label>
            <input type="file" class="form-control-file" id="FormControlFile">
        </div> -->
        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="/Tourism/trip/createTripApi" method="post" id="form3" enctype="multipart/form-data">
                <input style="display: none;" type="text" name="costs" id="costs2">
                <input style="display: none;" type="text" name="suggestion" id="suggest2">
                <input style="display: none;" type="text" name="transportation" id="trans2">
                <input style="display: none;" type="text" name="description" id="others2">
                <input style="display: none;" type="text" name="fullAddress" id="fadd2">
                <input style="display: none;" type="text" name="history" id="his2">
                <input style="display: none;" type="text" name="culture" id="cul2">
                <input style="display: none;" type="text" name="security" id="sec2">

                <input style="display: none;" type="file" value="Upload New image" id="input1" accept="image/*" name="file">
                <input class="add" type="button" value="اضافه کردن عکس جديد" onclick="browse()">
                <output class="row_images" id="result">
            </form>
        </div>
        <!-- <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div> -->
        <div class="btncontainer col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
                <input class="acc" type="button" value="ثبت تجربه سفر" onclick="create()">
                <a href="/Tourism/user/panel" class="rej">
                    <input class="btnrej" style="background-color: red;" type="button" value="انصراف">
                </a>
            
        </div>
        <!-- <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div> -->


    </div>


</body>
<script src="/Tourism/Views/js/journey.js"></script>

</html>