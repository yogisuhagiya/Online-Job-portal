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

if($_SESSION["step"]>=1){
  header("location:joblisting_step2.php");
}
else{


if(isset($_POST["submit"])){

    $cname = $_POST["cname"];
    
    $img_loc = $_FILES['cphoto']['tmp_name'];
    $img_name = $_FILES['cphoto']['name'];
    $img_des = "images/job/".$img_name;
    move_uploaded_file($img_loc,"../images/job/".$img_name);

    
    $juploader = $_POST["juploader"];
    $location = $_POST["location"];
    $employer_id = $_SESSION["employerid"];

    $sql = "INSERT INTO `jobs`(`company_name`, `company_photo`, `position`, `location`, `job_post`, `skills`, `descriprition`, `time`, `salary`, `employer_id`, `step`,`at_create`) VALUES ('$cname','$img_des','$juploader','$location','6','7','8','9','10','$employer_id','1',CURRENT_TIMESTAMP())";
    $result=mysqli_query($con,$sql);

     if($result){
        // $sql1 = "Select * from jobs where step = 1";
        // $result1 = mysqli_query($con,$sql1);
        // $r1 = mysqli_fetch_array($result1);

        // $_SESSION["Job_id"] = $r1['id'];
        $_SESSION["step"]=1;
        header("location:joblisting_step2.php");
      }
     else{
          die(mysqli_error($con));
     }
}

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Job Listiing 1</title>

    <style>
        body{
            margin:0;
            padding:0;
        }
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

        .banner a:hover {
             color: #000;
        }
   </style>
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<section class="navbar custom-navbar navbar-fixed-top" role="navigation" style="height: 60px;">
          <div class="container">

               <div class="navbar-header">
                    

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand" style="font-size: 25px;">Jobs Agency</a>
               </div>


          </div>
     </section>
     <div class="banner" style="margin: 70px 0 0 0;">
          <p><a href="home.php">Home</a> | <span>Adding Company Details :- Step 1</span></p>
     </div>

<html>
<body>
<div class="container">


<form class="well form-horizontal" action="" method="post" id="contact_form" enctype="multipart/form-data" style="margin-top: 50px;">
<fieldset>
<legend><center><h3 class="agileits_head">Add Details</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">Company Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input  name="cname" placeholder="Company Name" class="form-control"  type="text" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Company Photo</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
        <input name="cphoto" placeholder="Company Photo" class="form-control"  type="file" required>
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Job Uploader</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input name="juploader" placeholder="Position" class="form-control" type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Company Location</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
  <input name="location" placeholder="Location" class="form-control" type="text" required>
    </div>
  </div>
</div>
 
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="submit" value="Submit" class="btn btn-success">
					</center>
  </div>
</div>

</fieldset>
</form>

</div>
</div>
</body>
</html>


    <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>