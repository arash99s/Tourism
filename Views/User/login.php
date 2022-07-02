<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Tourism/views/styles/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <p class="title"> <a href="" id="inner">login</a>  your account</p>
        <form action="" id="login_form">
            <input type="text" placeholder="username" name="username">
            <div class="alerts" id="alert2">
                <!-- <p class="req" style="margin-bottom:5px ; ">
                    username is require
                </p> -->
            </div>
            <input type="password" placeholder="Password" name="password">
            <div class="alerts" id="alert3">
                <!-- <p class="req" style="margin-bottom:5px ; ">
                    username is require
                </p> -->
            </div>
            <div class="alerts" id="alert1">
                <!-- <p class="req" style="margin-bottom:5px ; ">
                    username is require
                </p> -->
            </div>
            <input type="button" onclick="goToCreate()" value="login">
            
        </form>
        <a href="/Tourism/user/createUser" class="after" id="second">create account</a>
        
    </div>
</body>
<script src="/Tourism/views/js/login.js"></script>
</html>