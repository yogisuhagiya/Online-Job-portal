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

    <title>Update Details</title>

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
          <p><a href="home.php">Home</a> | <span>Update Profile Image</span></p>
     </div>

    <?php
if (!isset($_SESSION['fname']))
{
    header("Location: http://localhost/job/login.php");
    die();
}
elseif($_SESSION["idtype"] != 'employer')
{
	header("Location: http://localhost/job/login.php");
    die();
}


$con = mysqli_connect("localhost","root","","job_db");
?>
<html>
<body>
<?php
										
										if(isset($_SESSION['employerid']))
										{
										$str="select * from employer_reg where employer_id=".$_SESSION['employerid'];
										$result = mysqli_query($con,$str);
										$r = mysqli_fetch_array($result);
										$a = $r['f_name'];
										$b = $r['l_name'];
										$c = $r['address'];
										$d = $r['phone'];
										$e = $r['email'];
										$f = $r['username'];
										$i = $r['pin_code'];
                                        $g = $r['state'];
                                        $h = $r['city'];

										}		
?>

<div class="container">
<form class="well form-horizontal" action="back_update.php" method="post" id="contact_form" style="margin-top: 50px;">
<fieldset>
<legend><center><h3 class="agileits_head">Profile Update!</h3></center></legend>
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" value="<?php echo $a;  ?>" class="form-control"  type="text">
  </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control" value="<?php echo $b;  ?>"  type="text">
    </div>
  </div>
</div>
 <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control" value="<?php echo $e;  ?>"  type="text">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">User Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="uname" placeholder="User name" class="form-control" type="text" value="<?php echo $f;  ?>">
    </div>
  </div>
</div> 
<div class="form-group">
  <label class="col-md-4 control-label">Phone </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phoneno" placeholder="(+91)123-1224-132" value="<?php echo $d;  ?>" class="form-control" type="text">
    </div>
  </div>
</div>

      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text" value="<?php echo $c;  ?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Pin Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="pincode" value="<?php echo $i;  ?>" placeholder="Pin Code" class="form-control"  type="text">
    </div>
</div>
</div>
   

<div class="form-group"> 
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="city" class="form-control selectpicker" >
										
                                                  <?php	
											$str = "select * from citymaster where cityid!=".$h;
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['cityid']."'>" .$row['cityname'].	"</option>";
											}

                                                       $str1 = "select * from citymaster where cityid=".$h;
											$result1 = mysqli_query($con,$str1);
											while($row = mysqli_fetch_array($result1))
											{
												echo "<option value='".$row['cityid']."' selected>" .$row['cityname'].	"</option>";
											}
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
    <select name="state" class="form-control selectpicker" >
										<?php	
											$str = "select * from statemaster where stateid=".$g;
											$result = mysqli_query($con,$str);
											while($row = mysqli_fetch_array($result))
											{
												echo "<option value='".$row['stateid']."' selected>" .$row['statename'].	"</option>";
											}

                                                       $str1 = "select * from statemaster where stateid!=".$g;
											$result1 = mysqli_query($con,$str1);
											while($row = mysqli_fetch_array($result1))
											{
												echo "<option value='".$row['stateid']."'>" .$row['statename'].	"</option>";
											}
											?>
    </select>
  </div>
</div>
</div>





<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <center>
						<input type="submit"  name="submit" value="Update" class="btn btn-success">
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