<?php 
include_once 'dbconnect.php';
session_start(); 
$ref="patients";
$na="";
$did=$_SESSION['docId'];
if(isset($_POST['send'])){
    if(isset($_GET['id'])){
        $treat=$_POST['treat'];
        $pid=$_GET['id'];
        $date=date("d/m/Y");
        
        $query=mysqli_query($con,"insert into treatment (p_id,dr_id,treatment,send_on) values 
         ('$pid','$did' ,'$treat','$date')");
        
    $data2=$database->getReference($ref)->getvalue();
          if(is_array($data2)){
            foreach($data2 as $key=>$data1){
            if($key==$pid){
                $ref2="patients/".$pid;
                $na=$data1['patientFulName'];
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
            'patienDisese'=>$data1['patienDisese'],
            'patientAddress'=>$data1['patientAddress'],
            'patientId'=>$data1['patientId'],
            'patientDiagnosis'=>$data1['patientDiagnosis'],
            'patientDTreatment'=>$treat,
            'paitentChecked'=>$date,
            'patientReportURL'=>$data1['patientReportURL']
    ];
            }
            $data5=$database->getReference($ref2)->update($dat);
            header("location:show_detials.php?id=".$pid."&name=".$na."");
        }
    }
    
}
else{
    if(isset($_GET['id'])){
        $pid=$_GET['id'];
        header("location:show_detials.php?id=$pid");
    }
    else{
        header("location:paitents.php");
    }
}}

?>