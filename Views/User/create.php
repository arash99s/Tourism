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
            <form novalidate>
                <div class="p-wraper">
                    <p class="outer-p">  <a id="inner">Create</a> account</p>
                </div>
                <div class="form-group">
                    <br>
                    <p>username</p>
                    <input type="text" name="username"  required minlength="4" maxlength="20"/>
                        <p>password</p>
                    <input type="password" name="password" required minlength="6"/>
                        <p>confirm password</p>
                    <input type="password" name="confirmPass" required minlength="6"/>
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
                    <button onclick="create_action()" class="btn btn-block">Create</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4 col-md-3"></div>
</body>
</html>