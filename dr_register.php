<?php
session_start();
include 'dbconnect.php';
$_SESSION['password_error']="";
$_SESSION['username_error']="";
$_SESSION['email_error']="";

?>


<?php


$full_name = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$c_address = $_POST['c_address'];
$re_password=$_POST['re_password'];
/////////////////////////////////////////
/*function generatePIN($digits = 4){
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
}
$pin = generatePIN(6);*/

if($password != $re_password){
    $_SESSION['password_error']='Sorry password not matched';
    header("location:register.php");
}
else{
    //retrieve firebase
    $ref='doctors';
    $data=$database->getReference($ref)->getvalue();
    $check=0;
    if(is_array($data)){
    foreach($data as $row=>$data1){
        if($data1['docUserName']==$username)
            $check=1;
    }}
   /* $result = mysqli_query($con,"select username from doctors where username ='$username'");
    $count=mysqli_num_rows($result);*/
    if(!$check==0){
        $_SESSION['username_error']='Sorry this username is used';
        header("location:register.php");
    }
    else{
        //retrieve firebase
        $ref='doctors';
    $data=$database->getReference($ref)->getvalue();
    $check2=0;
        if(is_array($data)){
    foreach($data as $row=>$data1){
        if($data1['docEmail']==$email)
            $check2=1;
    }}
       /* $result2 = mysqli_query($con,"select email from doctors where email ='$email'");
        $count2=mysqli_num_rows($result2);*/

       if($check2!=0){
          $_SESSION['email_error']='Sorry this email already registered';
           header("location:register.php");
      }

    else{
        //Firebase push data
        $data=[
            'docFulName'=>$full_name,
            'docUserName'=> $username,
            'docPassword'=>$password,
            'docPhone'=>$phone,
            'docEmail'=>$email,
            'docCAddress'=>$c_address,
            'docId'=>""
    ];
    $ref='doctors';
    $push=$database->getReference($ref)->push($data);
    $data2=$database->getReference($ref)->getvalue();
    if(is_array($data2)){
    foreach($data2 as $row=>$data1){
        $ref2="doctors/".$row;
        $dat=[
           'docFulName'=>$full_name,
            'docUserName'=> $username,
            'docPassword'=>$password,
            'docPhone'=>$phone,
            'docEmail'=>$email,
            'docCAddress'=>$c_address,
            'docId'=>$row 
        ];
        $push=$database->getReference($ref2)->update($dat);
    }}
        
     /*  $query=mysqli_query($con,"INSERT INTO doctors(fullname,username,password,phone,email,c_address,pin) VALUES  ('$full_name' , '$username' , '$password','$phone' ,'$email', '$c_address','$pin')");*/


    header("location:dr_profile.php");
   }

    }
}





?>