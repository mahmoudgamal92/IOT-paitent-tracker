<?php
include_once 'dbconnect.php';
$ref=$_GET['ref'];
session_start();
if(isset($_POST['submit'])){
    $full_name = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $c_address = $_POST['c_address'];
    $re_password=$_POST['re_password'];
    $pin=$_POST['pin'];
    $data=[
            'docFulName'=>$full_name,
            'docUserName'=> $username,
            'docPassword'=>$password,
            'docPhone'=>$phone,
            'docEmail'=>$email,
            'docCAddress'=>$c_address,
            'docPin'=>$pin
    ];
    $push=$database->getReference($ref)->update($data);
      header("location:dr_profile.php");  
}
if(isset($_GET['username'])){
    $username=$_GET['username'];
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
                    
       <?php 
        //retrieve firebase
        $ref='doctors';
        $data=$database->getReference($ref)->getvalue();
        $i=1;
        foreach($data as $row=>$data1){
            if($data1['docUserName']==$username){
                  echo"<form method='POST' id='signup-form' class='signup-form' action='edit.php?ref=".$_GET['ref']."'>
                        <h2 class='form-title'>Edit account</h2>                  
                        <div class='form-group'>
                       <span style='font-size:1.1rem;color:red;'> FullName</span>
                            <input type='text' class='form-input' name='fullname' value='".$data1['docFulName']."' id='fullname' placeholder='Enter full Your Name'/ required>
                        </div>
                        <span style='font-size:1.1rem;color:red;'> User Name</span>
                        <div class='form-group'>
                            <input type='text' class='form-input' name='username' id='username' value='".$data1['docUserName']."' placeholder='Enter  Your user Name'/ required>
                        </div>
                        <span style='font-size:1.1rem;color:red;'> Password</span>
                        <div class='form-group'>
                            <input type='password' class='form-input' name='password' id='password' placeholder 'Password' value='".$data1['docPassword']."' required>
                            <span toggle='#password' class='zmdi zmdi-eye field-icon toggle-password'></span>
                        </div>
                        <span style='font-size:1.1rem;color:red;'> Re-Password</span>
                        <div class='form-group'>
                            <input type='password' class='form-input' name='re_password' id='re_password' value='".$data1['docPassword']."' placeholder='Repeat your password'/ required>    
                        </div>
                        <span style='font-size:1.1rem;color:red;'> Phone</span>
                        <div class='form-group'>
                            <input type='number/text' class='form-input' name='phone' id='phone' placeholder='Enter your phone' value='".$data1['docPhone']."' required>
                        </div>
                        <span style='font-size:1.1rem;color:red;'> Email</span>
                        <div class='form-group'>
                            <input type='email' class='form-input' name='email' id='email' placeholder='Your Email' value='".$data1['docEmail']."'/ required>  
                        </div>
                        <span style='font-size:1.1rem;color:red;'> C_Address</span>
                        <div class='form-group'>
                            <input type='text' class='form-input' name='c_address' id='c_address' placeholder='Enter your clinic Address' value='".$data1['docCAddress']."'/ required>
                        </div>
                        <span style='font-size:1.1rem;color:red;'> Pin</span>
                        <div class='form-group'>
                            <input type='number/text' class='form-input' name='pin' id='c_address' placeholder='Enter your clinic Address' value='".$data1['docPin']."'/ required>
                        </div>
                        <div class='form-group'>
                            <input type='submit' name='submit' id='submit' class='form-submit' value='Update'/>
                        </div>
                    </form>
                  ";
            }
        }
}
    
    ?>
                           
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>