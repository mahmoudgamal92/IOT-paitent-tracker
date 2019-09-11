<?php 
include_once 'dbconnect.php';
session_start(); 
if(!isset($_GET['id'])){
     header("location:paitents.php");
}
else{
    $did=$_SESSION['docId'];
$pid=$_GET['id'];
/*$sql="DELETE FROM paitents WHERE id='$id'";
$result = mysqli_query($con,$sql);
$sql2="DELETE FROM uploads WHERE p_id='$id' and dr_id='$did'";
$result2 = mysqli_query($con,$sql2);*/
$ref="patients/".$pid;
$da=$database->getReference($ref)->remove();

$sql2="DELETE FROM treatment WHERE p_id='$pid' and dr_id='$did'";
$result2 = mysqli_query($con,$sql2);
header("location:paitents.php");
}

?>