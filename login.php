<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-image: url('imgs/f1.jpg'); background-size: cover">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container" style="border-radius: 34px;
background: linear-gradient(145deg, #cacaca, #f0f0f0);
box-shadow:  7px 7px 13px #bebebe,
             -7px -7px 13px #ffffff;">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="imgs/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <form method="POST" class="register-form" action="login.php" id="login-form">
                        <?php include('errors.php'); ?>
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" required="_required"placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" required="_required" placeholder="password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

   
</body>
</html>