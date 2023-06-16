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
    <title>Review Exam</title>
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
          border: 1px solid #29ca8e;
          width: 280px;
          margin-right: 22px;
          background-color: #29ca8e;
          font-weight: bold;
          letter-spacing: 1px;
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
          <p><a href="home.php">Home</a> | <span>Review The Exam</span></p>
     </div>


     <div class="form-group">
 <div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
	 <table id="table" style="margin-top: 50px;">
	 <tr style="background: #ff0000c2; color:white">
	 <th> Id</th>
	 <th> Exam_id</th>
	 <th> candidate_id</th>
	 <th> Question 1</th>
	 <th> Question 2</th>
	 <th> Question 3</th>
	 <th> Question 4</th>
     <th> Question 5</th>
     <th> Score</th>
     <th> Job_id</th>
     <th> Candidate status</th>
     <th> </th>

    

  	 </tr>

					 <?php
							$str = "select * from done_exam where score<>10 and employer_id=".$_SESSION['employerid'];
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['id']. "</td>";
                                echo "<td>" .$row['exam_id']. "</td>";
								echo "<td>" .$row['candidate_id']. "</td>";
								echo "<td>" .$row['que1_ans']. "</td>";
                                echo "<td>" .$row['que2_ans']. "</td>";
                                echo "<td>" .$row['que3_ans']. "</td>";
                                echo "<td>" .$row['que4_ans']. "</td>";
                                echo "<td>" .$row['que5_ans']. "</td>";
                                echo "<td>" .$row['score']. "</td>";
                                echo "<td>" .$row['job_id']. "</td>";
                                echo "<td>" .$row['candidate_status']. "</td>";
                                echo '<td><form action="candidate_profile.php" method="post">
                                            <input type="hidden" name="candidate_id" value="'.$row['candidate_id'].'">
                                            <input type="hidden" name="job_id" value="'.$row['job_id'].'">
                                            <input type="submit"class="btn btn-success" name="submit" value="View" style="width:100px;">
                                        </form></td>';
                            


								echo "</tr>";

							}
							?>
				 </table>
	

			 </div>
		 </div>
	 </div>
 </div>

</body>
</html>