<?php
include "config.php";

if(isset($_POST["submit"])){
     $cname=$_POST["cname"];
     $designation=$_POST["designation"];
     $fname=$_POST["fname"];
     $lname=$_POST["lname"];
     $email=$_POST["email"];
     $uname=$_POST["uname"];
     $password=$_POST["password"];
     $phoneno=$_POST["phoneno"];
     $address=$_POST["address"];
     $city=$_POST["city"];
     $state=$_POST["state"];
     $pincode=$_POST["pincode"];

     // $image=$_FILES["image"]["name"];
     $image = $_FILES['image'];

     $img_loc = $_FILES['image']['tmp_name'];
     $img_name = $_FILES['image']['name'];
     $img_des = "images/".$img_name;
     move_uploaded_file($img_loc,"images/".$img_name);
     $sql="insert into `employer_reg`(company_name,position,f_name,l_name,email,username,password,phone,address,city,state,pin_code,photo,status) values ('$cname','$designation','$fname','$lname','$email','$uname','$password','$phoneno','$address','$city','$state','$pincode','$img_des','pending')";
     $result=mysqli_query($con,$sql);

     if($result){
          $message = "You are Successfully Registered. Admin will accept your request in 10 Minutes.";
		echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
     }
     else{
          die(mysqli_error($con));
     }
}
?>

<html>
    <head>
    <title>Employer Registration</title>

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
                    <li class="active"><a href="Registration.php">Registration</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
               </ul>
          </div>

     </div>
</section>

<div>
     <img src="images/slider-image-3-1920x700.jpg" alt="">
</div>
<div class="banner">
<p><a href="index.php">Home</a> | <a href="Registration.php">Registration</a> |<span> Employer Registration</span></p></div>

<br>
<br>
<br>
<div class="container">
			
<form class="well form-horizontal" action="" method="post" id="contact_form" enctype="multipart/form-data">
<fieldset>


<legend><center><h3 class="agileits_head">Employer Registration</h3></center></legend>

<div class="form-group">
  <label class="col-md-4 control-label">Company Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input  name="cname" placeholder="Company Name" class="form-control"  type="text" title="Enter Company Name" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Designation</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input  name="designation" placeholder="Designation" class="form-control"  type="text" title="Enter Your Designation" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" pattern="[A-Za-z]{1,15}" title="Enter Your First Name" required>
  </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" pattern="[A-Za-z]{1,15}" title="Enter Your Last Name Properly ex:'patel' " required>
    </div>
  </div>
</div>


       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter Your Email Id Properly ex:'abc@mail.com' " required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" pattern="[A-Za-z]{1,15}" title="Enter Your User_Name Properly ex:'abc5,5abc' " required >
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Password</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control"  type="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Password must contain 8 letters. at least 1 character must in uppercase and 1 character must is number" required>
    </div>
  </div>
</div>

       
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneno" placeholder="(+91)123-1224-132" class="form-control" type="text"  pattern="[0-9]{5}[0-9]{5}" title="'Phone Number (Format: +99(99)9999-9999)'" required>
    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
        
  <input name="address" placeholder="Address" class="form-control" type="text" required>
    </div>
  </div>
</div>
   
<div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="city" class="form-control selectpicker" title = "Select one" required >
      <option value=" " >Please Select City</option>
										<?php	
                                          include 'config.php';
											$a = "Select Your City";
											$str = "select * from citymaster";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['cityid']."'>" .$row['cityname'].	"</option>";
											}
											echo "</select>";
											?>
    </select>
  </div>
</div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" title = "Select one"  required>
      <option value=" " >Please select State</option>
										<?php
                                          include "config.php";

											$str = "select * from statemaster";
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['stateid']."'>" .$row['statename'].	"</option>";
											}
											echo "</select>";
											?>
    </select>
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
  <input name="pincode" placeholder="Pin Code" class="form-control" pattern=".{6,}" type="text" title = "Enter proper pincode ex:'395009'" required>
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Photo Upload</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
  <input name="image" placeholder="Photo" class="form-control"  type="file">
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="submit" value="Submit" class="btn btn-success">
						<input type="reset" name="reset" id="res-1" value="Reset" class="btn btn-danger">
					</center>
  </div>
</div>

</fieldset>
</form>
</div>
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

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>

</html>