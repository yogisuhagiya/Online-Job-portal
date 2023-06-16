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

if($_SESSION["step"] > 4){
  header("location:joblisting_step6.php");
}
else if($_SESSION["step"] < 4){
  header("location:joblisting_step4.php");
}
else{


if(isset($_POST["submit"])){
    $Que3 = $_POST["Que3"];
    $que3_optA = $_POST["que3_optA"];
    $que3_optB = $_POST["que3_optB"];
    $que3_optC = $_POST["que3_optC"];
    $que3_optD = $_POST["que3_optD"];
    $que3_Ans  = $_POST["que3_ans"];

    $employer_id = $_SESSION["employerid"];
    $job_id = $_SESSION["Job_id"];
    
    $sql = "UPDATE `exam` SET `que3`='$Que3',`que3_optA`='$que3_optA',`que3_optB`='$que3_optB',`que3_optC`='$que3_optC',`que3_optD`='$que3_optD',`que3_Ans`='$que3_Ans',`step`='5' WHERE `job_id` = '$job_id' and `step`='4'";

    $result = mysqli_query($con,$sql);

     if($result){

      $sql2 = "UPDATE `jobs` SET `step`='5' WHERE `step`='4' and `employer_id`=$employer_id";
      $result2 = mysqli_query($con,$sql2);
  
        $_SESSION["step"]=5;
        header("location:joblisting_step6.php");
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

    <title>Job Listiing 5</title>

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
          <p><a href="home.php">Home</a> | <span>Adding Job Details :- Step 5</span></p>
     </div>


<html>
<body>
<div class="container">
<form class="well form-horizontal" action="" method="post" id="contact_form" style="margin-top: 50px;">
<fieldset>
<legend><center><h3 class="agileits_head">Exam Details</h3></center></legend>


<div>
  <div class="form-group">
    <label class="col-md-4 control-label">Question 3</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <textarea style="resize:none;" name="Que3" id="" cols="30" rows="5" placeholder="Description" class="form-control" required></textarea>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Option A</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="que3_optA" placeholder="Job Post" class="form-control"  type="text" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Option B</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="que3_optB" placeholder="Job Post" class="form-control"  type="text" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Option C</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="que3_optC" placeholder="Job Post" class="form-control"  type="text" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Option D</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="que3_optD" placeholder="Job Post" class="form-control"  type="text" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label">Answer</label>  
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
        <input  name="que3_ans" placeholder="Job Post" class="form-control"  type="text" required>
      </div>
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