<?php
    $show_name = "Login";
    $path = "/Tourism/user/loginUser";
    session_start();
    if(isset($_SESSION["user"])){
        $show_name = "Logout";
        $path = "/Tourism/user/logout";
         $user = $_SESSION["user"];
    }

//print_r($trips_db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Tourism/views/styles/trip.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>تجربه سفر</title>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" style="display:flex ; justify-content:left;">
            <a class="navbar-brand" href=<?php echo $path ?> style="font-size: medium !important;padding-top: 15px"><?php echo $show_name ?></a>
            <a class="navbar-brand" href="/Tourism/user/panel" style="font-size: medium !important;padding-top: 15px">Panel</a>
            <div style="justify-content:right ;align-self: flex-end;margin-left: auto;margin-right: 10px;" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li style="font-size: medium !important; " class="nav-item"><a class="nav-link" href="/Tourism/trip/main">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="slider-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="menu">
              <?php

                for ($i=0; $i < count($trip_db["images"]) ; $i++) { 
                  # code...
                  echo "<label for='slide-dot-$i'></label>";

                }

              ?>
              <!-- <label for="slide-dot-0"></label> -->
              
            </div>
            <?php
                for ($i=0; $i < count($trip_db["images"]) ; $i++) { 
                  $url =  $trip_db['images'][$i]['addressPath'];
                  $url_string = str_replace(trim(ROOT),'/Tourism/',$url);
                  
                  # code...
                  echo "<input id='slide-dot-$i' type='radio' name='slides' checked >
                  <div class='slide' style='background-image: url($url_string);'></div>";

                }

              ?>
            <!-- <input id="slide-dot-0" type="radio" name="slides" checked >
              <div class="slide" style="background-image: url('../../avatars/img2139.jpg');"></div> -->
            
      </div>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <i class='fas fa-pencil-alt'></i>&nbsp;<label for="auth"> نويسنده اين تجربه  : </label>
          <p id="auth">
            <?php 
              echo $trip_db["user"]['username'];
            ?>
          </p>
          <i class='fas fa-ad fa-1x'></i>&nbsp;<label for="fadd"> آدرس کامل  : </label>
          <p id="fadd">
            <?php 
              echo $trip_db["fullAddress"];
            ?>
          </p>
          <i class='fas fa-comment-dollar'></i>&nbsp;<label for="costs">هزينه های سفر : </label>
          <p id="costs">
          <?php 
              echo $trip_db["costs"];
            ?>
          </p>
          <i class='far fa-building'></i>&nbsp;<label for="his">تاریخچه بنا های دیده شده : </label>
          <p id="his">
          <?php 
              echo $trip_db["history"];
            ?>
          </p>
      
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <i class='fas fa-place-of-worship'></i>&nbsp;<label for="suggest">مکان های پیشنهادی : </label>
          <p id="suggest">
          <?php 
              echo $trip_db["suggestion"];
            ?>
          </p>
          <i class="material-icons">&#xe7fb;</i>&nbsp;<label for="cul">فرهنگ مردم : </label>
          
            <p id="cul">
            <?php 
              echo $trip_db["culture"];
            ?>
            </p>
            <i class="material-icons">&#xe535;</i>&nbsp;<label for="trans">نحوه جابه جایی در شهر : </label>
  
  
            <p id="trans">
            <?php 
              echo $trip_db["transportation"];
            ?>
            </p>
            <i class="material-icons">&#xe32a;</i>&nbsp;<label for="sec">نکات امنیتی : </label>
  
  
            <p id="sec">
            <?php 
              echo $trip_db["security"];
            ?>
            </p>
  
            <i class='fas fa-comment'></i>&nbsp;<label for="others">توضیحات دیگر : </label>
  
  
            <p id="others">
            <?php 
              echo $trip_db["description"];
            ?>
            </p>
          
        </div>
        </div>
        
    </div>
    
    
      
</body>
<script src="/Tourism/Views/js/trip.js"></script>
</html>