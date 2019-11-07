<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <title>Login</title>
</head>
<body>
    <!-- HEADER -->
    <div class="header">
        <img src="img/AgriSeek_Logo.png" id="imglogo" />
        <a class="active" href="#">Login</a>
        <a href="#">Farm</a>
        <a href="home.php">Home</a>
    </div>
    <div class="content">
        <form>
                <h1>Login</h1>
                <hr>
                    
                <label for="email"><b>Email</b></label>
                <input type="text" name="email" required><br><br>
            
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
            
                <button type="submit" class="loginbtn" name="submit-login">Login</button>

                <div class="container signin">
                    <p>Don't have an account? <a href="registration.php">Register</a>.</p>
                </div>
            </div>
        </form>
    </div>

    <!-- FOOTER -->

    <div class="footer">
        <div style="float: left; margin-left:20px;">Copyright 2019</div>
        <a href="#">Contact Us</a>
    </div>
</body>
</html>