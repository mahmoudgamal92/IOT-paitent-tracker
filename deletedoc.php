<?php 
include_once 'dbconnect.php';
session_start(); 
if(!isset($_GET['ref'])){
     header("location:dr_profile.php");
}
else{
    $ref=$_GET['ref'];
/*$sql2="DELETE FROM doctors WHERE id='$id'";
$result2 = mysqli_query($con,$sql2);*/
    $push=$database->getReference($ref)->remove();
header("location:dr_profile.php");

}
?>