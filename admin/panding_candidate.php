<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/job/admin/index.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/job/admin/index.php");
    die();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pending Candidate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

</head>
<?php
include 'menu.php';
include 'header.php';
?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a style='background: #fff !important;' href="home.php">Home</a><i class="fa fa-angle-right"></i>Pending candidate</li>
            </ol>
<div class="grid-form1">
<h3 id="form-horizontal">Pending candidate</h3>
<?php include 'config.php';
							$str = "select * from candidate_reg where status='pending' ";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Pending Requests found: $number</h4>";  ?>
<hr>
  	         <div class="tab-conten">
<form class="form-horizontal" method="post" action="addebook.php">

</form>



<div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
		 <b>
	 <table id="table">
	 <tr>
	 <th> candidate ID </th>
	 <th > First Name</th>
	 <th > Last Name</th>
	 <th > Email</th>
	 <th> User Name</th>
	 <th> Mobile No</th>
	 <th> State </th>
	 <th> City </th>
	 <th> Status </th>
	 <th> Photo </th>
	 <th> Action </th>
  	 </tr>

					 <?php
					
							$str = "select * from candidate_reg where status = 'pending' ";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['candidate_id']. "</td>";
								echo "<td>" .$row['f_name']. "</td>";
								echo "<td>" .$row['l_name']. "</td>";
								echo "<td>" .$row['email']. "</td>";
                                echo "<td>" .$row['username']. "</td>";
                                echo "<td>" .$row['phone']. "</td>";

                                $string = "select * from statemaster where stateid=".$row['state']." ";
                                $results = mysqli_query($con,$string);
                                $roww= mysqli_fetch_assoc($results);
                                echo "<td>" .$roww['statename']. "</td>";


                                $stringg = "select * from citymaster where cityid=".$row['city']." ";
                                $resultss = mysqli_query($con,$stringg);
                                $rowww= mysqli_fetch_assoc($resultss);
                                echo "<td>" .$rowww['cityname']. "</td>";

								
                                echo "<td>" .$row['status']. "</td>";
								echo "<td><img src='../".$row['photo']."' border=3 height=100 width=100></img></td>";

								echo "<td> <a style='background: #fff !important;' href = 'accept_candidate.php?candidate_id=".$row['candidate_id']."'>Active </a> </td>";
								echo "</tr>";

							}
							?>
				 </table>
						</b>
			 </div>
		 </div>
	 </div>
 </div>
