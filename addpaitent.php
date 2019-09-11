<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/addpaitentstyle.css">
    <style>
        a:hover{
            cursor:
        }
       button{
            cursor: pointer;
        }
    
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/doc.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="p_register.php" method="POST">
                        <h2>paitent registration form</h2>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" name="age" id="age" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">phone :</label>
                                <input type="number" name="phone" id="phone" required/>
                            </div>
                            
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="m" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value="f" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                       
                        <div class="form-row">
                            <div class="form-group">
                                <label for="address">address</label>
                                <input type="text" name="address" id="address" required/>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label for="dignoses">dignoses</label>
                            <input type="text" name="diagnoses" id="diagnoses" required>
                        </div>
                        <div class="form-group">
                            <label for="medical treatment">medical treatment</label>
                            <input type="text" name="medical_treatment" id="medical_treatment" required>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Add paitent" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                   
                       <a href="dr_profile.php">
                            <button style="width:60%;height:30px;background-color:red;font-size:1.3rem;margin-left:20%;">Back</button>
                           </a>
                        
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>