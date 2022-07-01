<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Tourism/views/styles/create.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="col-xl-4 col-lg-4 col-md-3"></div>
    <div class="col-xl-4 col-lg-4 col-md-6 outer-container mt-5">
        <div class="card card-container first-container">
            <div>
                <div class="p-wraper">
                    <p class="outer-p">  <a id="inner">Create</a> account</p>
                </div>
                <div class="form-group">
                    <form action="" novalidate id="create_form">
                        <br>
                        <p>username<span  class="req">*</span></p>
                        
                        <input type="text" name="username"  required />
                        <div class="alerts" id="alert1">
                            <!-- <p class="req" style="margin-bottom:5px ; ">
                                username is require
                            </p> -->
                        </div>
                            <p>password<span  class="req">*</span></p>
                        <input type="password" name="password" required />
                        <div class="alerts" id="alert2">
                            
                            <!-- <p class="req" style="margin-bottom:5px ; ">
                                password is require
                            </p> -->
                        </div>
                            <p>confirm password<span  class="req">*</span></p>
                        <input type="password" name="confirmPass" required/>
                        <div class="alerts" id="alert3">
                            <!-- <p class="req" style="margin-bottom:5px ; ">
                                confirm password is require
                            </p> -->
                        </div>
                            <p>email</p>
                        <input type="email" name="email" #email="ngModel" email />
                        <p>full name</p>
                        <input type="text" name="name"  />
                        <p>age</p>
                        <input type="text" name="age"  />
                        <p>city</p>
                        <input type="text" name="city"  />
                        <p>country</p>
                        <input type="text" name="country"  />
                        <!-- <button onclick="create_action()" class="btn btn-block">Create</button> -->
                        <input type="button"  onclick="create_action()" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-3"></div>
</body>
<script src="/Tourism/views/js/create.js"></script>

</html>