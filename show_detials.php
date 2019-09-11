<?php 
include_once 'dbconnect.php';
session_start(); 
if(isset($_GET['id'])){
 $pid=$_GET['id'];
 $did=$_SESSION['docId'];
 $tr="";
$name=$_GET['name'];
$date=date("d/m/Y");
     $ref="patients";
        $data=$database->getReference($ref)->getvalue();

/*$sql1 = "select * from paitents where id='$pid' order by id desc";
 $ref1 = mysqli_query($con,$sql1);
 $result1 = mysqli_fetch_object($ref1);*/
?>

<!DOCTYPE  HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<title>Paitent Detials</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
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
	<link rel="stylesheet" href="css/pstyle.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
		<style type="text/css">
			html {
				background: #ccc;
			} 
			.div1 {
				background: #fff;
				moz-border-radius: 10px;
				-webkit-border-radius: 10px;
				border-radius: 10px;
				box-shadow: 2px 2px 9px #414141;
				font-family: Verdana;
				width: 1400px;
				padding: 30px;
				text-align: center;
				margin: 50px auto;
                max-height: 350px;
                overflow-y: scroll;
			}
            button:hover{
                cursor: pointer;
            }
            input{
                width: 80%;
                height: 50px;
                text-align: center;
            }
            button{
                border-radius:8px; 
                height: 50px;
                width: 10%;
                background-color: dodgerblue;
                font-size: 1.2rem;
                font-family: sans-serif serif fantasy;
            }
            button:hover{
                height: 55px;
                width: 12%;
                font-size: 1.3rem;
            }
            
            #sub{
                border-radius:8px; 
                height: 50px;
                width: 10%;
                background-color: dodgerblue;
                font-size: 1.2rem;
                font-family: sans-serif serif fantasy;
            }
            #sub:hover{
                height: 55px;
                width: 12%;
                font-size: 1.3rem;
            }
            table{
                display: inline;
            }

		</style>
	</head>
	<body>
        	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<img style="width:150px;" src="img/logo.jpeg" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row ml-0 w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item active">
										<a class="nav-link" href="index.php">Home</a>
									</li>
									<li class="nav-item">
                                        <a class="nav-link" href="dr_profile.php">
										<?php
                                            if(isset($_SESSION['username'])){
                                                echo "Dr\\". $_SESSION['username'];
                                            }
                                            else{
                                                header("location:loginform.php");
                                            }
                                        ?></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="logout.php">logout</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
        <br><br>
        <div class="div1">
        <h1>Name: <?php echo "".$name; ?></h1>
        <h2>Id: <?php echo "".$pid; ?></h2>
		<br/>
		<table border="1" width="70%" cellpadding="8" cellspacing="0">
			<tr>
				<th>File Name</th>
				<th>Date/Time</th>
				<th>Open</th>
			</tr>
		<?php
           
					/*$sql = "select * from uploads where p_id='$pid' and dr_id='$did' order by id desc";
					$ref = mysqli_query($con,$sql);
    
					while($result = mysqli_fetch_object($ref) ):
						?>
						<tr>
							<td width='200px'><?php echo $result -> filename; ?></td>
							<td width='200px'><?php echo $result -> uploaded_on; ?></td>
							
							<td width='20px' style="background-color:green;"><a style="color:black;font-size:1.3rem;" target='_blank' href='view.php?id=<?php echo $result -> id; ?>'>Open</a></td>
                            
                            <td width='20px' style="background-color:red;"><a style="color:black;font-size:1.3rem;" href='deletefile.php?id=<?php echo $result -> id; ?>&pid=<?php echo $pid; ?>'>Delete</a></td>
						</tr>
						<?php
						endwhile;*/
    if(is_array($data)){
        foreach($data as $row=>$dat){
            if($dat['patientDocId']==$did && $dat['patientId']==$pid){
                echo"
                <tr>
							<td width='200px'>".$dat['patientReportURL']."</td>
							<td width='200px'>".$dat['paitentChecked']."</td>
							
							<td width='20px' style='background-color:green;'><a style='color:black;font-size:1.3rem;' target='_blank' href='view.php?id=".$dat['patientId']."'>Open</a></td>
						</tr>
                ";
            }
        }
    }
			?>
		</table>
            
            <table border="1" width="30%" cellpadding="8" cellspacing="0">
			<tr>
				<th>treatment</th>
				<th>Date/Time</th>
			</tr>
		<?php
                       ///////////////
        $ql=mysqli_query($con,"select * from treatment where p_id='$pid'");
        $count=mysqli_num_rows($ql);
        if($count==0){
        //Firebase
        $data2=$database->getReference($ref)->getvalue();
        if(is_array($data2)){
          foreach($data2 as $key=>$data1){
            if($data1['patientDocId']==$did && $data1['patientId']==$pid){
                $tr=$data1['patientDTreatment'];
                $query=mysqli_query($con,"insert into treatment (p_id,dr_id,treatment,send_on) values 
                ('$pid','$did' ,'$tr','$date')");
        }
          }
    }
    }
    
                    $sql5 = "select * from treatment where p_id='$pid' and dr_id='$did' order by id desc";
					$ref5 = mysqli_query($con,$sql5);
    
					while($row = mysqli_fetch_object($ref5) ):
						?>
						<tr>
							<td width='200px'><?php echo $row -> treatment; ?></td>
							<td width='200px'><?php echo $row -> send_on; ?></td>
						</tr>
						<?php
						endwhile;}
            else{
    header("location:paitents.php");
}
			?>
		</table>
            <br><br>
             <a href="paitents.php">
                            <button style="width:40%;height:30px;background-color:red;font-size:1.3rem;margin-left:10%;">Back</button>
                           </a>
</div>
        <div class="div1" style="overflow-y: auto;">
            <h3>Treatment</h3>
            <form action="treat.php?id=<?php echo $pid; ?>" method="post">
                <input type="text" name="treat" placeholder="Enter New Treatment">
                <input type="submit" name="send" value="Send" id="sub">
            </form>
        </div>
	</body>
</html>
