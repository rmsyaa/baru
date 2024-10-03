
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <title>Login</title>
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                       <!-- <img src="assets/login.png"> -->
            </div>

            <div class="col-md-6 right">
            <form action="admin/index.php" method="post" class="login-form">
                <div class="input-box">
                   
                   <header>Create account</header>
                   <div class="input-field">
                        <input type="text" class="input" id="Username" required="" autocomplete="off">
                        <label for="Username">Username</label> 
                    </div> 
                   <div class="input-field">
                        <input type="password" class="input" id="pass" required="">
                        <label for="pass">Password</label>
                    </div> 
                   <div class="input-field">
                        <input type="submit" class="submit" value="Login">
                   </div>   
            </div>
        </div>
    </div>
</div>
</body>
</html>