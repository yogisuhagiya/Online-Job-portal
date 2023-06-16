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

if($_SESSION["step"] > 1){
  header("location:joblisting_step3.php");
}
else if($_SESSION["step"] < 1){
  header("location:joblisting_step1.php");
}
else{


if(isset($_POST["submit"])){

    $jpost = $_POST["jpost"];
    $skills = $_POST["skills"];
    $description = $_POST["description"];
    $time = $_POST["time"];
    $salary = $_POST["salary"];

    $sql = "UPDATE `jobs` SET `job_post`='$jpost',`skills`='$skills',`descriprition`='$description',`time`='$time',`salary`='$salary',`step`=2 WHERE `step`=1 and `employer_id`=".$_SESSION["employerid"];
    $result=mysqli_query($con,$sql);

     if($result){
      
      $sql1 = "Select * from jobs where step = 2 and employer_id=".$_SESSION['employerid'];
      $result1 = mysqli_query($con,$sql1);
      $r1 = mysqli_fetch_array($result1);

      $_SESSION["Job_id"] = $r1['id'];

      $_SESSION["step"]=2;

      header("location:joblisting_step3.php");

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

    <title>Job Listiing 2</title>

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
          <p><a href="home.php">Home</a> | <span>Adding Job Details :- Step 2</span></p>
     </div>


<html>
<body>
<div class="container">
<form class="well form-horizontal" action="" method="post" id="contact_form" style="margin-top: 50px;">
<fieldset>
<legend><center><h3 class="agileits_head">Add Details</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">Job Post</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
  <input  name="jpost" placeholder="Job Post" class="form-control"  type="text" required>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Skills</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
  <input name="skills" placeholder="Skills" class="form-control" type="text" required>
    </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Description</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <textarea style="resize:none;" name="description" id="" cols="30" rows="10" placeholder="Description" class="form-control" required></textarea>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Time</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
  <input name="time" placeholder="Time" class="form-control" type="text" required>
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >Salary</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
  <input name="salary" placeholder="Salary" class="form-control" type="text" required>
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