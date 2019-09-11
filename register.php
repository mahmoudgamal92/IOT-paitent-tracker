<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/registerstyle.css">
</head>
<body>

    <div class="main">

        <section class="signup">
        
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="dr_register.php">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fullname" id="fullname" placeholder="Enter full Your Name"/ required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Enter  Your user Name"/ required>
                            <span style="color:red;">
                            <?php
                            if(isset($_SESSION['username_error'])){
                                echo $_SESSION['username_error'];
                            }
                                ?></span>
                        </div>


                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/ required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/ required>
                            <span style="color:red;">
                            <?php
                            if(isset($_SESSION['password_error'])){
                                echo $_SESSION['password_error'];
                            }
                            ?></span>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-input" name="phone" id="phone" placeholder="Enter your phone "/ required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/ required>
                            <span style="color:red;">
                            <?php
                            if(isset($_SESSION['email_error'])){
                                echo $_SESSION['email_error'];
                            }
                            ?></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="c_address" id="c_address" placeholder="Enter your clinic Address"/ required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>