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

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Applied Job</title>
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


        th,td{
            padding: 20px;
        }
        tr:nth-child(odd){
            background: #1a73e81f;
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
    <p><a href="home.php">Home</a> | <span>Applied job Details</span></p>
</div>


<div class="container" style="margin-top: 75px;">

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="row" id="row4">


                <?php
                    $str = "select * from done_exam where score<>10 and candidate_id=".$_SESSION['candidateid'];
                    $result = mysqli_query($con,$str);
                    while($r = mysqli_fetch_array($result)){
                    
                        $job_id = $r['job_id'];
                    
                        $str2="select * from `jobs` where id=$job_id";
                    
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
                                            <div class="courses-image" style="height:240px";>
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
                    }

               ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>