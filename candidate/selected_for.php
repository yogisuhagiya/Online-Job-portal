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


    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];

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
    <title>Selected For</title>
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
    <p><a href="home.php">Home</a> | <span>Selected for </span></p>
</div>


<div class="container" style="margin-top: 75px;">

    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="row" id="row4">


                <?php
                    $str = "select * from done_exam where score<>10 and candidate_status='selected' and candidate_id=".$_SESSION['candidateid'];
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


                                echo '<div id="printReceipt" style="margin-top:100px;font-size: 2rem;">
                                <div class="row">
                                    <div class="col-sm-5" style="text-align: center;"><span style="font-weight: 700;">ONLINE JOB PORTAL</span></div>
                                </div>
                                </br>
                                </br>
                                <div class="row">
                                    <div class="col-sm-5" style="text-align: end;"><span style="font-size: 2.5rem;">You are Selected</span></br><span style="font-weight: 700;">'.$a.'</span></div>
                                </div>
                                </br>
                                </br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p style="font-size: 1.75rem;color: #000;">
                                            <span style="font-weight: 700;">'.$fname.' '.$lname.'</span>
                                            </br></br>
                                                Thank you for your application for the '.$e.' position at '.$a.'. We were impressed with your skills and experience, and we would like to invite you to interview for the position.
                                                The interview will take place at our office located at '.$d.' on Wednesday, May 3rd at 10:00 AM. You will be meeting with our hiring team to discuss your qualifications and experience in more detail.
                                                During the interview, we will ask you questions related to your previous work experience, your technical skills, and your approach to web design. We will also give you the opportunity to ask any questions you may have about the position or our company.
                                                If you have any scheduling conflicts or require any special accommodations, please let us know as soon as possible so we can make arrangements accordingly.
                                                We look forward to meeting with you and discussing your qualifications for '.$e.' position. If you have any questions before the interview, please do not hesitate to reach out.
                                            </br></br>
                                            <span>Best regards,</span></br><span style="font-weight: 700;">'.$c.' at '.$a.'</span>
                                        </p>
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
<div style="width:100%">
    <button id="print" onclick="printContent('printReceipt');" class="btn btn-lg btn-space btn-primary" style="margin: auto;display: block;">Print</button>
</div>

<script>
      function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
</script>
</body>

</html>