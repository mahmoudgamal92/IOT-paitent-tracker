
<?php
include_once 'dbconnect.php';
session_start();  
$_SESSION['login_error']="";
if(isset($_SESSION['type'])){
    $type=$_SESSION['type'];
    $pwd = $_POST['password'];
    $username = $_POST['username'];

    if($type==0){
        /*$result = mysqli_query($con,"select * from doctors where username = '$user_name' and password = '$pwd'");
        $count=mysqli_num_rows($result);*/
        
    //retrieve firebase
        $ref='doctors';
     $data=$database->getReference($ref)->getvalue();
        if(is_array($data)){
    foreach($data as $row=>$data1){
        if($data1['docUserName']==$username && $data1['docPassword']==$pwd){
            $_SESSION['username']=$data1['docUserName'];    
            $_SESSION['docId']=$data1['docId']; 
            $_SESSION['type']=$type; 
            
        }
    }
        }
        if(isset($_SESSION['username'])){
            header("location:dr_profile.php");
        }else{
            $_SESSION['login_error']="Sorry username or password is incorrect!";
   header("location:loginform.php?type=0");
        }
     
    }
    else if ($type==1){
        /* $result = mysqli_query($con,"select * from admin where username = '$user_name' and password = '$pwd'")
         $count=mysqli_num_rows($result);*/
        
    //retrieve firebase
        $ref='admins';
     $data=$database->getReference($ref)->getvalue();
        if(is_array($data)){
    foreach($data as $row=>$data1){
        if($data1['adUserName']==$username && $data1['adPassword']==$pwd){
            $_SESSION['username']=$data1['adUserName'];   
            $_SESSION['type']=$type; 
        }
    }}
        if(isset($_SESSION['username'])){
            header("location:dr_profile.php");
        }else{
             header("location:loginform.php?type=1"); 
        }
    }
    
    else{
       header("location:loginform.php?type=incorrect");
    }
}
else{
     header("location:loginform.php");
}

?>
<DOCTYPE HTML>
    <html>
        <head></head>
        <body>
            <script>
                var database = firebase.database();
            </script>
        </body>
    </html>
</DOCTYPE>