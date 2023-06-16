<?php
include 'config.php';

if(isset($_POST["submit"])){
          
     $username = $_POST["username"];
     $password = $_POST["password"];

     //  $sql="UPDATE `adminlogin` SET `password`='$password' WHERE `username`='$username'";
      $sql = "UPDATE `adminlogin` SET `password`='$password' WHERE `username`='$username'";
      $result = mysqli_query($con,$sql);
 
      if($result){
          header("location:index.php");
      }
      else{
          die(mysqli_error($con));
      }
 }


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Update Password</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Trendz Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
	<!--//Style-CSS -->
</head>

<body>
	<!-- /login-section -->

	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<h1>Admin Forget Password</h1>
				<!-- if logo is image enable this   
					<a style='background: #fff !important;' class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">Admin</h6>
							<div class="speci-login first-look">
								<img src="http://localhost/job/images/buyer.jpg" alt="" class="img-responsive" width="40px">
							</div>
						</div>
						<div class="bottom-content">
							<form action="" method="post">
								<input type="text" name="username" class="input-form" placeholder="Enter Your Username"
										required="required" />
								<input type="password" name="password" class="input-form"
										placeholder="Your New Password" required="required" />
								<button type="submit" name="submit" class="loginhny-btn btn">Change Password</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
</body>

</html>