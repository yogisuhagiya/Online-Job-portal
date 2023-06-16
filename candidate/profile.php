<?php
session_start();
include 'config.php';

if (!isset($_SESSION['idtype']))
{
    header("Location: http://localhost/job/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'candidate')
{
	header("Location: http://localhost/job/login.php");
    die();
}
?>

<html>

<head>

	<title>Profile</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/owl.carousel.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/style.css">
	<style>
		.panel-info>.panel-heading{
			color: #fff;
    	background-color: #29ca8e;
    	border-color: #000;
		}
		.row-soni{
			display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
		}
		
		</style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	


	<!-- MENU -->
	<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Jobs Agency</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="home.php">Jobs</a></li>
                         <li class="active"><a href="profile.php">Profile</a></li>
                         <li><a href="blog-posts.php">Blog</a></li>
                         <?php
                              
                              $qur123 = "select * from done_exam where score<>10 and candidate_id=".$_SESSION['candidateid'];
                              $result_qur123 = mysqli_query($con,$qur123);
                              
                              if($r_qur123 = mysqli_num_rows($result_qur123) > 0){
                                   echo '<li><a href="applied_job.php">Applied Job</a></li>';
                              }
                         ?>
                         <?php
                              
          
                              $qur123 = "select * from `selected_candidate` where candidate_id=".$_SESSION['candidateid'];
                              $result_qur123 = mysqli_query($con,$qur123);
                              
                              if($r_qur123 = mysqli_num_rows($result_qur123) > 0){
                                   echo '<li><a href="Selected_for.php">Selected</a></li>';
                              }
                         
                         ?>
                         
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
                                   <li><a href="update_detail.php">Update Details</a></li>
                                   <li><a href="update_photo.php">Update Profile Photo</a></li>
                                   <li><a href="change_pass.php">Forget Password</a></li>
                              </ul>
                         </li>
                         <li><a href="logout.php" >Log Out</a></li>
                        
                    </ul>
               </div>

          </div>
     </section>


	<?php  
								
								$str = "select * from candidate_reg where candidate_id=".$_SESSION['candidateid'];
								$result = mysqli_query($con,$str);
								$r = mysqli_fetch_array($result);

								$a = $_SESSION["candidateid"];
								$b = $_SESSION["fname"];
                                $c = $_SESSION["lname"];
								$d = $_SESSION["address"];
								$e = $_SESSION["mobile"];
                              	$f = $_SESSION["email"];
                              	$g = $_SESSION["uname"];
                              	$h = $_SESSION["pincode"];
								$k = $r['photo'];
								
								// select city name from city master table
								$city_str = "select * from citymaster where cityid=".$_SESSION['cityid'];
								$city_result = mysqli_query($con,$city_str);
								$city_r = mysqli_fetch_array($city_result);

								$i = $city_r["cityname"];
                              	
								
								// select state name from state master table
								$state_str = "select * from statemaster where stateid=".$_SESSION['stateid'];
								$state_result = mysqli_query($con,$state_str);
								$state_r = mysqli_fetch_array($state_result);


								$j = $state_r["statename"];

                              	

								
		
							?>
							<br>
							<br>
							<br>
							<br>
							<br>
							
	<div class="container">
		<div
			class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

			<div class="panel panel-info">
				<div class="panel-heading">
					<h1 class="panel-title" align="center">Your Profile</h1>
				</div>
				<div class="panel-body">
					<div class="row-soni">
						<br>
						<center><img src="http://localhost/job/<?php echo $k;?>" height='100px'></center>
						<br>
						<br>
						
						<div class=" col-md-9 col-lg-9 ">
	
							<table class="table table-user-information">
								
								<tbody>
									<tr>
										<th>Id </th>
										<td>
											<?php  echo $a;  ?>
										</td>
									</tr>
							

									<tr>
										<th>First Name </th>
										<td>
											<?php  echo $b;  ?>
										</td>
									</tr>

									<tr>
										<th>Last Name </th>
										<td>
											<?php  echo $c;  ?>
										</td>
									</tr>


									<tr>
										<th>Address </th>
										<td>
											<?php  echo $d;  ?>
										</td>
									</tr>


									<tr>
										<th>Mobile No </th>
										<td>
											<?php  echo $e;  ?>
										</td>
									</tr>


									<tr>
										<th>Email </th>
										<td>
											<?php  echo $f;  ?>
										</td>
									</tr>


									<tr>
										<th>User Name </th>
										<td>
											<?php  echo $g;  ?>
										</td>
									</tr>


									<tr>
										<th>Pincode </th>
										<td>
											<?php  echo $h;  ?>
										</td>
									</tr>

									<tr>
										<th>City </th>
										<td>
											<?php  echo $i;  ?>
										</td>
									</tr>

									<tr>
										<th>State </th>
										<td>
											<?php  echo $j;  ?>
										</td>
									</tr>

									

									

								</tbody>
								
							</table>
		

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>

	<footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>A- 102 green plaza <br>Surat, ABC 394101</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/yogi.suhagiya.5/" class="fa fa-facebook-square" attr="facebook icon" target="blank"></a></li>
                                   <li><a href="https://twitter.com/yogi_suhagiya21" class="fa fa-twitter"  target="blank"></a></li>
                                   <li><a href="https://www.instagram.com/___itsigoy___/" class="fa fa-instagram"  target="blank"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2023 jobs Agency</p>
                                   
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+0261 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">jobagency@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="terms.html">Terms & Conditions</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>
	<script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>


</body>

</html>
