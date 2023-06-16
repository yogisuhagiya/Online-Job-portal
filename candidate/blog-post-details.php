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

     <title>Blog Details Page</title>

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

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

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
                         <li><a href="home.php">Jobs</a></li>
                         <li><a href="profile.php">Profile</a></li>
                         <li class="active"><a href="blog-posts.php">Blog</a></li>
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

     <section>
          <div class="container">
               <h2>Advice from a wide range of experts. Real-life stories and examples. Very comprehensive.</h2>

               <p class="lead">
                    <i class="fa fa-user"></i> Mihir Soni &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-calendar"></i> 12/06/2020 10:30 &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-eye"></i> 114
               </p>

               <img src="images/other-image-fullscreen-1-1920x700.jpg" class="img-responsive" alt="">

               <br>

               <h3>As you would expect from the Guardian, this is a top-quality blog that is jammed full of insightful advice and ideas.</h3>
               

               <p>It’s really comprehensive and a great place to start researching just about any aspect of job-seeking. Features a lot of first-person stories that are really inspirational, often with examples which challenge stereotypes about particular jobs or career paths.</p>

               <p>It’s a great blog that's focused on giving practical advice and insight into employability. It aims to equip people at all stages in their careers with guidance around clarifying their identity, adjusting their mind-set and improving professionalism.</p>

               <p>As an extra bonus, the blog is split into categories. There’s also an interesting range of additional (mostly free) resources you can access.</p>

               <br>

               <h4>Useful for information you need to know about the recruitment industry.</h4>

               <p>Rather than giving you ideas and tips, it provides longer articles which cover a topic in detail and explain what good looks like, the thought processes that recruiters use and what they’re looking for from candidates.</p>

               <p>It’s elegant, credible and really well written.</p>

               <br>


               <h4>Longer-term career strategies, branding and networking.</h4>

               <p>The strapline for this blog is ‘career realism – because every job is temporary’ and this really sums up what the blog is all about: thinking about your ongoing employability and keeping yourself in control of your career.</p>

               <p>It covers all of the basics you’d expect but there are some interesting alternative ideas and suggestions in there too.</p>

               <br>
               <br>

               <div class="row">
                    <div class="col-md-4 col-xs-12 pull-right">
                         <h4>Social share</h4>

                         <p>
                              <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;

                              <a href="#" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp;&nbsp;&nbsp;

                              <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                         </p>

                         <br>


                         <h4>Other posts</h4>

                         <ul class="list">
                              <li><a href="blog-post-details.html">Specific content for students and graduates</a></li>
                              <li><a href="blog-post-details.html">Risk-takers and anyone interested in startups.</a></li>
                              <li><a href="blog-post-details.html">Inspiration and browsing.</a></li>
                         </ul>
                    </div>

                    <div class="col-md-8 col-xs-12">
                         <h4>Comments</h4>

                         <p>No comments found.</p>

                         <br>
                         
                         <h4>Leave a Comment</h4>

                         <form action="#" class="form">

                              <div class="row">
                                   <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                             <label class="control-label">Name</label>

                                             <input type="text" name="name" class="form-control">
                                        </div>
                                   </div>

                                   <div class="col-sm-6 col-xs-6">
                                        <div class="form-group">
                                             <label class="control-label">Email</label>

                                             <input type="email" name="email" class="form-control">
                                        </div>
                                   </div>
                              </div>

                              <div class="form-group">
                                   <label class="control-label">Message</label>

                                   <textarea name="comment" class="form-control" rows="10" autocomplete="off"></textarea>
                              </div>

                              <button type="submit" class="section-btn btn btn-primary">Submit</button>
                         </form>
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

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>