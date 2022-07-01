<?php
    session_start();
    if(isset($_SESSION["user"])){
        $user = $_SESSION["user"];
    }else{
        header('Location: '.'/Tourism/user/loginUser');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Tourism/views/styles/panel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
    <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10 container">
        <hr>
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 item">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <label for="">user name :</label>
            </div> 
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><?php echo $user["username"];?></p>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <label for="">email : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><?php echo $user["email"];?></p>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                <label for="">firstname : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><?php echo $user["firstname"];?></p>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <label for="">lastname : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><?php echo $user["lastname"];?></p>
            </div>
            <hr>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <label for="">age : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <p><?php echo $user["age"];?></p>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <hr>
        </div>
        
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 item">
            <div class="imgwrapper">
                <img src=<?php echo $user["avatar"];?> alt="">
            </div>
        </div>
    
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2">
            <div class="col-lg-4 col-md-8 col-xs-8">
                <label for="">city : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <p><?php echo $user["city"];?></p>
            </div>
        </div>
        
        
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2">
            
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8">
                <label for="">country : </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-4">
                <p><?php echo $user["country"];?></p>
            </div>
        </div>
        

        <!-- <div class="col-lg-4"></div> -->
        <hr>
        <div class="col-lg-5"></div>
        <div class="col-lg-2">
            <input type="button" value="new journey" onclick="createTrip()">
            <a href="/Tourism/user/logout">logout</a>
        </div>
        <div class="col-lg-5"></div>
    </div>
    <div>
       
    </div>
    <div class="col-lg-2 col-md-1 col-sm-1"></div>
    
    <script src="/Tourism/Views/js/panel.js"></script>
</body>
</html>