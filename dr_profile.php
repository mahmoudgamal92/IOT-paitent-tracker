<?php 
include_once 'dbconnect.php';
?>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>IOTPT</title>
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



	<!--================Header Menu Area =================-->
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
                                        session_start();
                                            if(isset($_SESSION['type'])){
                                               if($_SESSION['type']==0){
                                                   if(isset($_SESSION['username'])){
                                                echo "Dr\\". $_SESSION['username'];
                                            }
                                            else{
                                                header("location:loginform.php");
                                            }
                                               } 
                                                else if($_SESSION['type']==1){
                                                      if(isset($_SESSION['username'])){
                                                echo "AD\\". $_SESSION['username'];
                                            }
                                            else{
                                                header("location:loginform.php");
                                            }
                                                }
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

   <?php 
    if($_SESSION['type']==0){
                            
                            echo"   
                            <section class='team-area section_gap'>
		                     <div class='container'>
		                    	<div class='row justify-content-center section-title-wrap'>
				                  <div class='col-lg-12'>
				                   	<h1>welcome</h1>
					                       <p>
                                        <h3>Dr\\". $_SESSION['username']."</h3><br>
                                    <h4>Id:  ". $_SESSION['docId']."</h4><br>
						                </p>
				               </div>
			               </div>
			               <div class='row justify-content-center d-flex align-items-center' style='margin-left:25%;'>
			               	<div class='col-lg-4 col-md-6 single-team mb-50'>
			               		<div class='thumb'>
			               			<a href='paitents.php'><img class='img-fluid' style='width:78%;font-size:1.2rem;' src='img/users.png' alt='></a>
			               		<a style='margin-left:15%;' href='paitents.php'>show paitents</a>
			               		</div>
			               	</div>
			               	<div class='ol-lg-4 col-md-6 single-team mb-50'>
			               		<div class='thumb'>
			               			<a href='addpaitent.php'><img class='img-fluid' style='width:50%;' src='img/user.png' alt='></a>
			               			<div class='align-items-end justify-content-center d-flex'>
			               				<a style='margin-left:15%;font-size:1.2rem;' href='addpaitent.php'>Add paitent</a>
			               			</div>
			               		</div>
			               	</div>
      
                    </div>
                        </div>
                    </section>
                            ";}
    else if($_SESSION['type']==1){
      /*  $sql1 = "select * from doctors";
        $ref1 = mysqli_query($con,$sql1);
        echo"
        <br><br>
          <div class='div1'>
        <h2> Doctors Table</h2>
		<br/>
		<table border='1' width='70%' cellpadding='8' cellspacing='0'>
			<tr>
				<th>id</th>
                <th>FullName</th>
                <th>UserName</th>
				<th>Password</th>
				<th>Phone</th>
                <th>Email</th>
                <th>C_Address</th>
                <th>Pin</th>
			</tr>";
		
           			while($result1 = mysqli_fetch_object($ref1)):
					
        echo" <tr>
        <td>". $result1 -> id."</td>
        <td>". $result1 -> fullname ."</td>
        <td>". $result1 -> username ."</td>
        <td>". $result1 -> password ."</td>
        <td>". $result1 -> phone ."</td>
        <td>". $result1 -> email ."</td>
        <td>". $result1 -> c_address ."</td>
        <td>". $result1 -> pin ."</td>
        <td style='background-color:green;'><a style='color:black;font-size:1.3rem;' href='edit.php?id=". $result1 -> id."'>Edit</a></td>
        
        <td style='background-color:red;'><a style='color:black;fosize:1.3rem;'href='deletedoc.php?id=".$result1 -> id ."'>Delete</a></td>
			</tr>";
			
			endwhile;
        echo"<tr>
        <td cellspacing=8><a href='register.php'>&#43; Add Doctor</a></td>
        </tr>
        </table>";*/
        
            //retrieve firebase
        $ref='doctors';
        $data=$database->getReference($ref)->getvalue();
        $i=1;
        echo"
        <br><br>
          <div class='div1'>
        <h2> Doctors Table</h2>
		<br/>
		<table border='1' width='70%' cellpadding='8' cellspacing='0'>
			<tr>
				<th>#</th>
                <th>FullName</th>
                <th>UserName</th>
				<th>Password</th>
				<th>Phone</th>
                <th>Email</th>
                <th>C_Address</th>
			</tr>";
        if(is_array($data)){
        foreach($data as $row=>$data1){			
        echo" <tr>
        <td>". $i ."</td>
        <td>". $data1['docFulName']."</td>
        <td>". $data1['docUserName'] ."</td>
        <td>". $data1['docPassword'] ."</td>
        <td>". $data1['docEmail'] ."</td>
        <td>". $data1['docPhone'] ."</td>
        <td>". $data1['docCAddress'] ."</td>
        <td style='background-color:green;'><a style='color:black;font-size:1.3rem;' href='edit.php?username=". $data1['docUserName']."&ref=$ref/$row'>Edit</a></td>
        
        <td style='background-color:red;'><a style='color:black;fosize:1.3rem;'href='deletedoc.php?ref=$ref/$row' '>Delete</a></td>
			</tr>";
            $i++;
        }
    }
        echo"<tr>
        <td cellspacing=8><a href='register.php'>&#43; Add Doctor</a></td>
        </tr>
        </table>";
      }
    else{
       header("location:loginform.php");
    }
    ?>


    
    </body>

    <script src="js/push.js"></script>
    <script>
    
    function redirect(x)
    {

window.location=x;

    }
    
    </script>
    </html>