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

<?php
if(isset($_POST["submit"])){


    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "images/".$img_name;
    move_uploaded_file($img_loc,"../images/".$img_name);

     $sql="UPDATE `candidate_reg` SET photo='$img_des' WHERE candidate_id=".$_SESSION["candidateid"];
     $result=mysqli_query($con,$sql);

     if($result){
          header("location:profile.php");
     }
     else{
          die(mysqli_error($con));
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
    <title>Update Photo</title>
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
       
        .hidden{
          visibility: hidden;
        }
        .btn{
          border: 2px solid black;
          width: 280px;
          margin-right: 22px;
          background-color: #29ca63;
          font-weight: bold;
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

     <center>
    <img onclick="myfun()" style="margin-top: 150px;" src="../images/buyer.jpg" height="300px"/>

     <form class="update-image" method="post" enctype="multipart/form-data">
          <input name="image" id="image1" placeholder="Photo" type="file" class="hidden"/><br />
          <input type="submit"  name="submit" value="Submit" class="btn btn-danger">
    </form>
     </center>
     <script>
          function myfun(){
               document.querySelector("#image1").click();
          }
     </script>
</body>
</html>