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
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Home</title>

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

     <div>
          <img src="../images/slider-image-3-1920x700.jpg" alt="" height="395px" width="100%">
     </div>


     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Jobs Listing</h1>

                    <br>

                    <p class="lead">There’s a very important distinction between a job description and a job posting.</p>
               </div>
          </div>
     </section>

     <section class="section-background">

          <!-- start search-bar -->

          <div id="search-bar" style="display: flex;
                              justify-content: center;
                              align-items: baseline;
                              gap: 5px;
                              margin: 20px 33% 20px;">
               <input type="text" class="form-control" id="search" name="search">  
               <label for="search" style="background: #28a745;
                              color: #fff;
                              padding: 6px 8px;
                              border-radius: 5px;">Search</label> 
          </div>

          <!-- end search-bar -->

          
          <div class="container">

               <div class="row">
                    <div class="col-lg-12 col-xs-12">
                         <div class="row" id="row4">


                         <?php

          
                        $str2="select * from `jobs` where step=6";
                    
                        $result2 = mysqli_query($con,$str2);
                        while($r2 = mysqli_fetch_array($result2)){
                                $m = $r2['id'];
                                $a = $r2['company_name'];
                                $b = $r2['company_photo'];
                                $c = $r2['position'];
                                $d = $r2['location'];
                                $e = $r2['job_post'];
                                $f = $r2['skills'];
                                $i = $r2['descriprition'];
                                $j = $r2['at_create'];  
                                
                                $g = $r2['time'];
                                $h = $r2['salary'];
                                $s = $r2['step'];



                    

                            echo '<div class="col-lg-4 col-md-4 col-sm-9">
                                    <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                            <div class="courses-image" style="height:240px;">
                                               <img src="../'.$b.'" class="img-responsive" alt="">
                                            </div>
                                            <div class="courses-date">
                                               <span title="Posted on"><i class="fa fa-calendar"></i> '.date("d-m-Y",strtotime($j)).'</span>
                                               <span title="Location"><i class="fa fa-map-marker"></i>'.$d.'</span>
                                            </div>
                                        </div>
                                   
                                        <div class="courses-detail">
                                           <h3>'.$e.'</h3>
                                
                                           <p class="lead"><strong>₹'.$h.'</strong></p>
                               
                                        </div>
                                   
                                        <div class="courses-info">
                                            <form action="job-details.php" method="post">
                                                <input type="hidden" value='.$m.' name="job_id">
                                                
                                                <input type="submit" class="section-btn btn-primary btn-block" value="View Details" name="submitjb">
                                            </form>
                                        </div>
                                    </div>
                                </div>';
        

                        }	
                    

               ?>

                         </div>
                    </div>
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

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="./js/jquery.js"></script>
     <script src="./js/bootstrap.min.js"></script>
     <script src="./js/owl.carousel.min.js"></script>
     <script src="./js/smoothscroll.js"></script>
     <script src="./js/custom.js"></script>


     <script type="text/javascript">

document.querySelector("#search").addEventListener("keyup",serachfun = () =>{
  
  var search_insert = document.querySelector("#search").value;
  
  $.ajax({
    url: "search.php",
    type: "POST",
    data: {search:search_insert},
    success: function(data){
      $("#row4").html(data);
    }
  })
});


</script>

</body>
</html>