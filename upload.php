<?php
include_once 'dbconnect.php';
session_start(); 
if (isset($_POST['btnUploadFile'])) {
  $pid=1; 
  $did=$_SESSION['id'];
  $fileName = $_FILES['uploadfile']['name'];
	$uploadDir = "uploadedFiles" . DIRECTORY_SEPARATOR . $fileName;
	$fileType = $_FILES['uploadfile']['type'];
	$tmpName = $_FILES['uploadfile']['tmp_name'];
	$size = $_FILES['uploadfile']['size'];
    echo $size;
	if ($size > 0) {
		$file = fopen($tmpName, "r");
		$fileContent = fread($file, $size);
		$contentToStore = base64_encode($fileContent);
		$values = array("p_id"=>mysqli_real_escape_string($con,$pid),"dr_id"=>mysqli_real_escape_string($con,$did),"filename" => mysqli_real_escape_string($con,$fileName), "filetype" => mysqli_real_escape_string($con,$fileType), "filesize" => mysqli_real_escape_string($con,$size), "filecontent" => mysqli_real_escape_string($con,$contentToStore));
		$sql = "INSERT INTO uploads (p_id,dr_id,filename, filetype, filesize, filecontent) VALUES ('" . implode("','", array_values($values)) . "')";
		if (!mysqli_query($con,$sql)) {	
			die("<br>Unable to store information : ");
		} else {
			echo "File Uploaded to database successfully";
		}

	}
}
?>
<DOCTYPE HTML>
    <html>
        <head>
            <!-- Required meta tags -->
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	        <link rel="icon" href="img/favicon.png" type="image/png">
	        <title>Upload</title>
	        <!-- Bootstrap CSS -->
	        <link rel="stylesheet" href="css/bootstrap.css">
	        <link rel="stylesheet" href="vendors/linericon/style.css">
	        <link rel="stylesheet" href="css/font-awesome.min.css">
	        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	        <link rel="stylesheet" href="vendors/animate-css/animate.css">
	        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	        <!-- main css -->
	        <link rel="stylesheet" href="css/style.css">
	        <link rel="stylesheet" href="css/responsive.css">  
        </head>
        <body>
          <form action="upload.php" method="post" enctype="multipart/form-data">

			<label>Select File :</label>
			<input type="file" name="uploadfile"/>
			<input type="submit" value="Upload File" name="btnUploadFile"/>
		</form>
        </body>
    </html>
</DOCTYPE>