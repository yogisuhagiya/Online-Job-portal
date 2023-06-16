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

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

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
                         <li class="active"><a href="index.php">Home</a></li>
                         <li><a href="about-us.php">About Us</a></li>
                         <li><a href="Registration.php">Registration</a></li>
                         <li><a href="Login.php">Login</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Job Agency</h1>
                                        <h3>We help you to get job more faster</h3>
                                        <a href="login.php" class="section-btn btn btn-default">Login Now</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Job Agency</h1>
                                        <h3>We found best employers for you.</h3>
                                        <a href="Registration.php" class="section-btn btn btn-default">Registration Now</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Job Agency</h1>
                                        <h3>We are here to help you to grow in better and fast way</h3>
                                        <a href="login.php" class="section-btn btn btn-default">Login Now</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>About us</h2>

                                   <br>

                                   <p class="lead">We find the best employer for candidate. We verified very employers which are good for candidate or not. We always try to help candidate to get their job in most effictive way as well as faster way. We connect best candidate to their future candidates</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>

<section>
               <div class="container">
               <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Featured Jobs</h2>
                              </div>
                         </div>
                    <div class="row">


                    <?php
                                   include 'config.php';

						     $str="select * from `jobs` where `step`=6 limit 3";

						     $result = mysqli_query($con,$str);
						     while($r = mysqli_fetch_array($result)){
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

                              ?>



                                   <div class="col-lg-4 col-md-4 col-sm-9">
                                        <div class="courses-thumb courses-thumb-secondary">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="<?php echo $b ?>" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span title="Posted on"><i class="fa fa-calendar"></i> 15-06-2020</span>
                                                       <span title="Location"><i class="fa fa-map-marker"></i> <?php echo $d?></span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><?php echo $e?></h3>

                                                  <p class="lead"><strong>₹<?php echo $h?></strong></p>

                                             </div>

                                             <div class="courses-info">
                                                  <form action="job-details.php" method="post">
                                                       <input type="hidden" value="<?php echo $m?>" name="job_id">
                                                 
                                                       <input type="submit" class="section-btn btn-primary btn-block" value="View Details" name="submitjb">
                                                  </form>
                                             </div>
                                        </div>
                                   </div>

                              <?php

			          	     }	

                              ?>

                    </div>
               </div>
          </section>

          <!-- blog post -->
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Latest Blog posts</h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary" style="height:393px;">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Jessica Howington</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 12/10/2022</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 84</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="https://www.flexjobs.com/blog/post/remote-work-statistics/">Remote Work Statistics & Trends: The Latest in Remote Work</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="https://www.flexjobs.com/blog/post/remote-work-statistics/" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary" style="height:393px;">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Rachel Pelta</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 18/10/2022</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 14</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="https://www.flexjobs.com/blog/post/7-stats-show-hybrid-future-of-work/">7 Stats That Show Hybrid is the Future of Work</a></h3>
                                   </div>

                                   <div class="courses-info" style="margin-top:31px;">
                                        <a href="https://www.flexjobs.com/blog/post/7-stats-show-hybrid-future-of-work/" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary" style="height:393px;">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="images/blog-2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Jessica Howington</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 15/10/2022</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 84</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="https://www.flexjobs.com/blog/post/inflation-impacting-career-decisions/">FlexJobs Report: 80% Say Inflation Is Impacting Their Career Decisions</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="https://www.flexjobs.com/blog/post/inflation-impacting-career-decisions/" class="section-btn btn btn-primary btn-block">Read More</a>
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </section>
          
          <!-- team members -->
          <section id="testimonial">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Testimonials <small>from around the world</small></h2>
                              </div>

                              <div class="owl-carousel owl-theme owl-client">
                                   <div class="col-md-4 col-sm-4">
                                        <div class="item" style="height: 394px;">
                                             <div class="tst-image">
                                                  <img src="images/mihir.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Mihir Soni</h4>
                                                  <span>IOS Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item" style="height: 394px;">
                                             <div class="tst-image">
                                                  <img src="images/yogi.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Yogi Suhagiya</h4>
                                                  <span>Data Scientist</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-md-4 col-sm-4">
                                        <div class="item" style="height: 394px;">
                                             <div class="tst-image">
                                                  <img src="images/divyesh.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="tst-author">
                                                  <h4>Divyesh Timbadiya</h4>
                                                  <span>Full Stack Developer</span>
                                             </div>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                             <div class="tst-rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                             </div>
                                        </div>
                                   </div>

                                   

                              </div>
                        </div>
                    </div>
               </div>
          </section> 
     </main>
       

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