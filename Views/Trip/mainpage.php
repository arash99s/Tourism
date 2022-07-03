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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/Tourism/views/styles/mainpage.css">

    <title>صفحه ی اصلی گردشگری</title>
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
    <!-- <div class="container2 col-lg-12 col-md-12 col-sm-12 col-xs-12"> -->
        <?php
            for ($i=0; $i <count($trips_db) ; $i++) { 
                $trip_db = $trips_db[$i];
                $url =  $trip_db['images'][0]['addressPath'];
                $url_string = str_replace(trim(ROOT),'/Tourism/',$url);
                # code...
            
        ?>
      <div class="row item">
        <div class="room col-lg-11 col-11 m-auto">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 detail rightcontainer">
                    <div class="row">
                        <div class="col-11 m-auto">
                            <div class="head d-flex justify-content-between flex-sm-wrap flex-md-wrap w-100">
                                <a routerLink="rooms">
                                    <h2>
                                        <?php echo $trip_db['user']['username']?>
                                    </h2>
                                </a>
                            </div>
                            <p>
                                <i style="font-size: medium  !important;" class='fas fa-ad fa-1x'></i>&nbsp;<label for="fadd"> آدرس کامل  : </label>
                                <p id="fadd">
                                <?php 
                                    echo $trip_db["fullAddress"];
                                ?>
                                </p>
                            </p>
                            <p>
                              <i style="font-size: medium  !important;" class='fas fa-comment-dollar fa-1x'></i>&nbsp;<label for="costs">هزينه های سفر : </label>
                              <p id="costs">
                              <?php 
                                echo $trip_db["costs"];
                                 ?>
                              </p>
                            </p>
                            
                            
                        </div>
                    </div>
                    <div class="row btncontainer">
                        <div class="col-12 d-flex justify-content-center">
                            <a href="/Tourism/trip/get/<?php  echo $trip_db["id"]; ?>">
                                <button class="btn">
                                    <p>مشاهده تجربه سفر</p>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <a class="imgcontainer">
                        <img 
                        src="<?php  echo $url_string ?>"
                        >
                    </a>
                </div>
            </div>
        </div>
      </div>
    <!-- </div> -->
    <?php
        }
            
    ?>
    
      
</body>
<script src="/Tourism/Views/js/mainpage.js"></script>
</html>