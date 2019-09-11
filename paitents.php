<?php 
include_once 'dbconnect.php';
session_start(); 
$dr_id=$_SESSION['docId'];

/*$sql = "select * from paitents where dr_id='$dr_id' order by id desc";
 $ref = mysqli_query($con,$sql);*/
?>

<!DOCTYPE  HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<title>Paitents</title>
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
				width: 1200px;
				padding: 30px;
				text-align: center;
				margin: 50px auto;
			}
            button:hover{
                cursor: pointer;
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
            
        <h1><?php echo "Paitents"; ?></h1>
		<br/>
		<table border="1" width="100%" cellpadding="8" cellspacing="0">
			<tr>
				<th>paitent Name</th>
				<th>Checked</th>
				<th>Diagnosis</th>
				<th>Show</th>
                <th>Delete</th>
			</tr>
		<?php
           
					/*while($result = mysqli_fetch_object($ref)):
						?>
						<tr>
							<td width='150px'><?php echo $result -> name; ?></td>
							<td><?php echo $result -> check_date; ?></td>
							<td><?php 
							echo $result -> disese; 
							?> 
							</td>
							<td width='40px' style="background-color:green;"><a style="color:black;font-size:1.3rem;"  href='show_detials.php?id=<?php echo $result -> id; ?>'>Show</a></td>
                            
                            <td width='40px' style="background-color:red;"><a style="color:black;font-size:1.3rem;" href='delete.php?id=<?php echo $result -> id; ?>'>Delete</a></td>
						</tr>
						<?php
						endwhile;*/
            $ref="patients";
            $data=$database->getReference($ref)->getvalue();
            if(is_array($data)){
                if(empty($data)){
                    
                }
                else{
                  foreach($data as $row=>$data1){
                    if($data1['patientDocId']==$dr_id){
                       echo"<tr>
                        <td>".$data1['patientFulName']."</td>
                        <td>".$data1['paitentChecked']."</td>
                        <td>".$data1['patientDiagnosis']."</td>
                        <td width='40px' style='background-color:green;'><a style='color:black;font-size:1.3rem;'  href='show_detials.php?id=".$data1['patientId']."&name=".$data1['patientFulName']."'>Show</a></td>
                            
                            <td width='40px' style='background-color:red;'><a style='color:black;font-size:1.3rem;' href='delete.php?id=".$data1['patientId']."'>Delete</a></td>
                        </tr>";
                    }
                }  
                }  
            }
			?>
		</table>
            <br><br>
            <a href="addpaitent.php">
                            <button style="width:40%;height:30px;background-color:rgb(100,100,100);font-size:1.3rem;margin-left:10%;">Add Paitent</button>
                           </a>
            <br><br>
            
            <a href="dr_profile.php">
                            <button style="width:40%;height:30px;background-color:red;font-size:1.3rem;margin-left:10%;">Back</button>
                           </a>
</div>
	</body>
</html>
