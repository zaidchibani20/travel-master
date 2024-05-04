<?php
   include "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="login.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="loginphp.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input">
                    </div>
                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                    <div class="field button-field">
                        <button type="submit" name="login"value="Login">LogIn</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Don't have an account? <a href="signup.php" class="link signup-link">Signup</a></span>
                </div>
            </div>
            <div class="line"></div>
            <div class="media-options">
                <a href="#" class="field facebook">
                    
                    <i class='bx bxl-facebook facebook-icon'><img src="images/facebook (2).png"  style="left: 0px;" class="facebook-icon"></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src="images/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div></section>
        <script src="login.js"></script>
</body></html>