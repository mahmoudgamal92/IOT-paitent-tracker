<?php 
include_once 'dbconnect.php';
session_start();    

/*if(isset($_GET['id'])){
    $id=$_GET['id'];
    $did=$_SESSION['id'];
    $query=mysqli_query($con,"select * from uploads where id='$id'");
    $count=mysqli_num_rows($query);
 
    if ($query) {
	$result = mysqli_fetch_object($query);
	if ($result) {
		header("Content-type:$result->filetype");
		header("Content-Length: $result->filesize");
		echo base64_decode($result -> filecontent);
		die ;
	}
}
}else{
header("location:paitents.php");}*/
/*$data=[
    'adUserName'=>"Mahmoud Emad",
    'adPassword'=>"memomemo",
    'adId'=>''
];
 $ref='admins';
    $data=$database->getReference($ref)->push($data);

$datat= $data=$database->getReference($ref)->getvalue();
if(is_array($datat)){
    foreach($datat as $row=>$data1){
        $ref2="admins/".$row;
        $dat=[
            'adUserName'=>$data1['adUserName'],
            'adPassword'=>$data1['adPassword'],
            'adId'=>$row
        ];
        $push=$database->getReference($ref2)->update($dat);
        echo"<br>".$row;
    }
}else {
    echo "dassa";
}*/
$ref="patients";
$dat=$database->getReference()->getvalue();
if(is_array($dat)){
    foreach($dat as $row=>$data){
        echo $data['patientEcgGraphURL'];
        ?>
<img src="https://firebasestorage.googleapis.com/v0/b/heart-tracker-732f8.appspot.com/o/tmp3.png?alt=media&token=ddbb7a1d-a16d-4b7c-aecd-b8938301eea0"
<?php
    }
}
?>