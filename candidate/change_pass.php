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

<?php

if(isset($_POST["submit"])){
          
     $password=$_POST["password"];

      $sql="UPDATE `candidate_reg` SET `password`='$password' WHERE candidate_id=".$_SESSION["candidateid"];
      $result=mysqli_query($con,$sql);
 
      if($result){
          header("location:profile.php");
      }
      else{
          die(mysqli_error($con));
      }
 }
?>

<html>

<head>

<title>Update Password</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
<!-- MAIN CSS -->
<link rel="stylesheet" href="css/style.css">
<style>
          .banner {
               height: 70px;
               background: #29ca8e;
               display: flex;
               align-items: center;
          }

          .banner p {
               font-size: 20px;
               margin-left: 285px;
               padding-top: 10px;
          }

          .banner span {
               color: #fff;
               letter-spacing: 2px;
          }

          .banner a{
            color: #337ab7;
          }
          .banner a:hover {
             color: #000;
        } 
          center .candidate,center .employer:hover{
               background-color: #29ca8e;
               padding: 10px 25px;
               border-radius: 10px;
               font-size: 20px;
               color: #fff;
          }
          center .employer,center .candidate:hover{
               padding: 10px 25px;
               border-radius: 10px;
               font-size: 20px;
               color: #000;
               border: 2px solid #29ca8e;
               background: #fff;
          }
     </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <!-- <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section> -->


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
                         <li><a href="profile.php">Profile</a></li>
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
                         
                         <li class="dropdown" class="active">
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

     <div>
          <img src="images/slider-image-3-1920x700.jpg" alt="">
     </div>
     <div class="banner">
          <p><a href="home.php">Home</a> | <span>Change Password</span></p>
     </div>


<br/>
<br/>
<br/>
<div class="typo">
<div class="container">
			
    <form class="well form-horizontal" action="" method="post" >
<fieldset>
<!-- Form Name -->
<legend><center><h3 class="agileits_head">Update Password</h3></center></legend>

<div class="form-group">
  <label class="col-md-4 control-label">Enter New Password</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="password" placeholder="Enter New Password" class="form-control" type="password" required>
    </div>
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
                         <center>
						<input type="submit"  name="submit" value="Submit" class="btn btn-success">
						<input type="reset" name="reset" id="reset" value="Cancel" class="btn btn-danger">
					</center>
  </div>
</div>



</fieldset>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
					
	</div>
</div>

</div>

</form>
</div>
    </div><!-- /.container -->

<br/>
<br/>
<br/>
<footer id="footer">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2>Headquarter</h2>
                         </div>
                         <address>
                              <p>212 Barrington Court <br>New York, ABC 10001</p>
                         </address>

                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>

                         <div class="copyright-text">
                              <p>Copyright &copy; 2020 Company Name</p>
                              <p>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
                         </div>
                    </div>
               </div>

               <div class="col-md-4 col-sm-6">
                    <div class="footer-info">
                         <div class="section-title">
                              <h2>Contact Info</h2>
                         </div>
                         <address>
                              <p>+1 333 4040 5566</p>
                              <p><a href="mailto:contact@company.com">contact@company.com</a></p>
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
                                        <input type="email" class="form-control" placeholder="Enter your email"
                                             name="email" id="email" required>
                                        <input type="submit" class="form-control" name="submit" id="form-submit"
                                             value="Send me">
                                   </form>
                                   <span><sup>*</sup> Please note - we do not spam your email.</span>
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </div>
</footer>


</body>
<script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</html>

