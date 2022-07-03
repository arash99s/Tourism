<?php
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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/Tourism/views/styles/mainpage.css">

    <title>Document</title>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container" style="display:flex ; justify-content:left;">
            <a class="navbar-brand" href="#!" style="padding-top: 15px">Login</a>
            <a class="navbar-brand" href="#!" style="padding-top: 15px">Panel</a>
            <div style="justify-content:right ;align-self: flex-end;margin-left: auto;margin-right: 10px;" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <div class="container2 col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
      <div class="row item">
        <div class="room col-lg-11 col-11 m-auto">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 detail rightcontainer">
                    <div class="row">
                        <div class="col-11 m-auto">
                            <div class="head d-flex justify-content-between flex-sm-wrap flex-md-wrap w-100">
                                <a routerLink="rooms">
                                    <h2>
                                        User name
                                    </h2>
                                </a>
                            </div>
                            <p>
                                <!-- <i style="font-size: medium  !important;" class="fa fa-bed mr-1" aria-hidden="true"></i> -->
                                <i style="font-size: medium  !important;" class='fas fa-ad fa-1x'></i>&nbsp;<label for="fadd"> آدرس کامل  : </label>
                                <p id="fadd">
                                  دگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون  قرار گیرد.
                                </p>
                            </p>
                            <p>
                              <i style="font-size: medium  !important;" class='fas fa-comment-dollar fa-1x'></i>&nbsp;<label for="costs">هزينه های سفر : </label>
                              <p id="costs">
                                ر این صورت می توان امید داشت که تمام و دشواری موجود در ارائهیرد.
                              </p>
                            </p>
                            
                            
                        </div>
                    </div>
                    <div class="row btncontainer">
                        <div class="col-12 d-flex justify-content-center">
                            <button class="btn">
                                <p>مشاهده تجربه سفر</p>
                            </button>
                            <!-- <button class="btn btn-success">
                            <p>رزرو</p>
                        </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a class="imgcontainer">
                        <img 
                        src="../default.png"
                        >
                        <!-- <img  src="../default.png"
                            class="card-img-top img-fluid"> -->
                        <!-- <img src="{{room.attachments[0]}}"> -->
                    </a>
                </div>
            </div>
        </div>
      </div>
    <!-- </div> -->
    
    
      
</body>
<script src="/Tourism/Views/js/mainpage.js"></script>
</html>