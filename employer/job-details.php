<?php
session_start();
include 'config.php';

if (!isset($_SESSION['idtype']))
{
    header("Location: http://localhost/job/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'employer')
{
	header("Location: http://localhost/job/login.php");
    die();
}
?>

<?php

if(isset($_POST["submitjb"])){

     $str="select * from `jobs` where id=".$_POST['job_id'];
     
          $result = mysqli_query($con,$str);
          $r = mysqli_fetch_array($result);
     
          $m = $r['id'];
          $a = $r['company_name'];
          $b = $r['company_photo'];
          $c = $r['position'];
          $d = $r['location'];
          $e = $r['job_post'];
          $f = $r['skills'];
          $i = $r['descriprition'];
          $g = $r['time'];
          $h = $r['salary'];
          $s = $r['step'];
          $t = $r["employer_id"];
          $j = $r['at_create'];  




     $str1="select * from `employer_reg` where employer_id=$t";
     
          $result1 = mysqli_query($con,$str1);
          $r1 = mysqli_fetch_array($result1);
     
          $m1 = $r1['employer_id'];
          $a1 = $r1['company_name'];
          $b1 = $r1['position'];
          $c1 = $r1['f_name'];
          $d1 = $r1['l_name'];
          $e1 = $r1['email'];
          $f1 = $r1['username'];
          $g1 = $r1['password'];
          $h1 = $r1['phone'];
          $i1 = $r1['city'];
          $j1 = $r1['state'];
          $k1 = $r1['pin_code'];
          $l1 = $r1['photo'];
}
else{
     header("location:home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>PHPJabbers.com | Free Job Agency Website Template</title>

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

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


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
                         <li class="active"><a href="home.php">Jobs</a></li>
                         <li><a href="profile.php">Profile</a></li>
                         <li><a href="blog-posts.php">Blog</a></li>
                         <li><a href="review_exam.php">Review Exam</a></li>
                         
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

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12">
                         <div>
                              <br>

                              <img src="../<?php echo $b;?>" alt="" class="img-responsive wc-image">

                              <br>
                         </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-xs-12">
                         <form action="#" method="post" class="form">
                              <h2><?php echo $e?></h2>

                              <p class="lead"><strong class="text-primary"><?php echo $h?></strong> <small> per year</small></p>

                              <p class="lead">
                                   <i class="fa fa-briefcase"></i> <?php echo $e?> &nbsp;&nbsp;
                                   <i class="fa fa-map-marker"></i> <?php echo $d?> &nbsp;&nbsp;
                                   <i class="fa fa-calendar"></i> <?php echo date("d-m-Y",strtotime($j));?> &nbsp;&nbsp;
                                   
                              </p>

                              
                         </form>
                    </div>
               </div>

               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4>Job Description</h4>
                    </div>

                    <div class="panel-body">
                         <p><?php echo $i?></p>

                         

                         <h4>Qualifications:</h4>
                         <p><?php echo $f?></p>
                
                    </div>
               </div>

               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4>About Our Company</h4>
                    </div>

                    <div class="panel-body">
                         <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>

                         <div class="row">
                              <div class="col-lg-6">
                                   
                              </div>

                              <div class="col-lg-6">
                                   
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-6">
                                   <p>
                                        <span>Company name</span>

                                        <br>

                                        <strong><?php echo $a?></strong>
                                   </p>
                              </div>

                              <div class="col-md-6">
                                   <p>
                                        <span>Job Uploader Name</span>

                                        <br>

                                        <strong><?php echo $c?></strong>
                                   </p>
                              </div>
                         </div>

                         <div class="row">

                         <div class="col-md-6">
                                   <p>
                                        <span>Mobile phone</span>

                                        <br>

                                        <strong><?php echo $h1?></strong>
                                   </p>
                              </div>


                              <div class="col-md-6">
                                   <p>
                                        <span>Email</span>

                                        <br>

                                        <strong><?php echo $e1?></strong>
                                   </p>
                              </div>
                              
                         </div>

                         <div class="row">
                              

                              <div class="col-md-6">
                                   <p>
                                        <span>Website</span>

                                        <br>

                                        <strong><a href="http://www.cannonguards.com/">http://www.cannonguards.com/</a></strong>
                                   </p>
                              </div>

                              <div class="col-md-6">
                                   <p>
                                        <span>City</span>

                                        <br>

                                        <strong><?php echo $d?></strong>
                                   </p>
                              </div>
                         </div>

                    </div>
               </div>

               <div class="clearfix">
                    <a href="home.php" class="section-btn btn btn-primary pull-left">Back</a>

                    <ul class="social-icon pull-right">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-envelope-o"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
          </div>
     </section>

     <!-- FOOTER -->
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

     <!-- SCRIPTS -->
     <script src="./js/jquery.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <script src="./js/owl.carousel.min.js"></script>
     <script src="./js/smoothscroll.js"></script>
     <script src="./js/custom.js"></script>

</body>
</html>