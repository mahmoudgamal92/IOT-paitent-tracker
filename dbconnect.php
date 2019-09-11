<?php

$con= new mysqli('localhost','root','','iotpt') or die ("connection erorr".mysqli_error($con));
require __DIR__.'/vendor/autoload.php';
use Kreait\Firebase\Factory;
use  Kreait\Firebase\ServiceAccount;

$serviceAccount=ServiceAccount::fromJsonFile(__DIR__.'/heart-tracker-732f8-firebase-adminsdk-8o829-f8e52599cc.json');

$firebase=(new Factory)
    ->withServiceAccount($serviceAccount)
    
    ->create();

$database=$firebase->getDatabase();

/*->withDatabaseUrl('https://heart-tracker-732f8.firebaseio.com/')*/
?>