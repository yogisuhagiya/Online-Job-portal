<html>

<head>

<title>Login</title>

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
               height: 50px;
               background: #29ca8e;
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
                         <li><a href="index.php">Home</a></li>
                         <li><a href="about-us.php">About Us</a></li>
                         <li><a href="Registration.php">Registration</a></li>
                         <li class="active"><a href="Login.php">Login</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                    </ul>
               </div>

          </div>
     </section>

     <div>
          <img src="images/slider-image-3-1920x700.jpg" alt="">
     </div>
     <div class="banner">
          <p><a href="index.php">Home</a> | <span>Login</span></p>
     </div>


<br/>
<br/>
<br/>
<div class="typo">
<div class="container">
			
    <form class="well form-horizontal" action="addlogin.php" method="post" >
<fieldset>
<!-- Form Name -->
<legend><center><h3 class="agileits_head">Login Page</h3></center></legend>
<div class="form-group"> 
  <label class="col-md-4 control-label">Role</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="role" class="form-control selectpicker" title = "Select one" required>
      <option value="#">--Select Role--</option>
      <option value="candidate" selected>Candidate</option>
      <option value="employer">Employer</option>
      <option value="admin">Admin</option>
									
										
    </select>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password" required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="sub-1" value="Submit" class="btn btn-success">
						<input type="reset" name="res-1" id="res-1" value="Reset" class="btn btn-danger">
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
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
					<center>
						<p>Do you wish to register for <a href="Registration.php" class="link user-actions"><strong>a new account</strong></a>?</p>
						<a href="change_pass.php" style="padding-top: 15px; display: block;">Forget Password</a>
					</center>
	</div>
</div>
</div>

</form>
</div>
    </div><!-- /.container -->

<br/>
<br/>
<br/>
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

</body>
<script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</html>

