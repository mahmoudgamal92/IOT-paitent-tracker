<?php
include_once 'dbconnect.php';
session_start();
?>


<?php
if(isset($_POST['submit'])){
$dr_id = $_SESSION['docId'];
$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$diagnoses = $_POST['diagnoses'];
$md = $_POST['medical_treatment'];
$gender=$_POST['gender'];
$date=date("d/m/Y");
$r="";
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
    
/*$query=mysqli_query($con,"insert into paitents (dr_id,name,age,disese,phone,address,diagnoses,pin) values 
 ('$dr_id','$name' ,'$age','$disese','$phone','$address','$diagnoses','$pin' )");
    
 $q=mysqli_query($con,"SELECT * FROM paitents ORDER BY Id DESC LIMIT 1");
 $row=mysqli_fetch_assoc($q);
    $pid=$row['id'];*/
    /*$que=mysqli_query($con,"insert into treatment (p_id,dr_id,treatment) values 
 ('$pid','$dr_id' ,'$md')");*/
    $data=[
            'newPatientId'=>"",
            'patientBPM'=>"",
            'patientBloodGrp'=>"",
            'patientEcgGraphURL'=>"",
            'patientEmail'=>"",
            'patientGender'=>$gender,
            'patientPassword'=>"",
            'patientValue'=>"",
            'patientFulName'=>$name,
            'patientAge'=>$age,
            'patientDocId'=>$_SESSION['docId'],
            'patientPhone'=>$phone,
            'patientAddress'=>$address,
            'patientId'=>"",
            'patientDiagnosis'=>$diagnoses,
            'patientDTreatment'=>$md,
            'paitentChecked'=>$date,
            'patientReportURL'=>""
    ];
    $ref='patients';
    $push=$database->getReference($ref)->push($data);
    
    $data2=$database->getReference($ref)->getvalue();
    if(is_array($data2)){
        foreach($data2 as $key=>$data1){
            $ref2="patients/".$key;
            $dat=[
            'newPatientId'=>$data1['newPatientId'],
            'patientBPM'=>$data1['patientBPM'],
            'patientBloodGrp'=>$data1['patientBloodGrp'],
            'patientEcgGraphURL'=>$data1['patientEcgGraphURL'],
            'patientEmail'=>$data1['patientEmail'],
            'patientGender'=>$data1['patientGender'],
            'patientPassword'=>$data1['patientPassword'],
            'patientValue'=>$data1['patientValue'],
            'patientFulName'=>$data1['patientFulName'],
            'patientAge'=>$data1['patientAge'],
            'patientDocId'=>$data1['patientDocId'],
            'patienPhone'=>$data1['patienPhone'],
            'patientAddress'=>$data1['patientAddress'],
            'patientId'=>$key,
            'patientDiagnosis'=>$data1['patientDiagnosis'],
            'patientDTreatment'=>$data1['patientDTreatment'],
            'paitentChecked'=>$data1['paitentChecked'],
            'patientReportURL'=>$data1['patientReportURL']
    ];
            $data5=$database->getReference($ref2)->update($dat);
        }
    }
header("location:paitents.php");

}
?>