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
<?php


error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Applied Jobs</title>
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
                <li class="breadcrumb-item"><a style='background: #fff !important;' href="home.php">Home</a><i class="fa fa-angle-right"></i>Reports<i class="fa fa-angle-right"></i>Registered candidate</li>
            </ol>
<div class="page-container">
 	    <div class="grid-form1">
			 <h3>Display Job</h3>
			 <div class="page-container">
 	    <div class="grid-form1">
			                 <?php include "config.php";
							$str = "select * from jobs";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Parents found: $number</h4>";  ?>
<hr>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="post">
<div class="form-group">
 <div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
	 <table id="table">
	 <tr>
	 <th>  Id </th>
	 <th> Company Name</th>
	 <th> Position</th>
	 <th> Location</th>
	 <th> Job Post</th>
	 <th> Skills </th>
	 <th> Time </th>
     <th> Salary </th>
     <th> employer_id </th>
     <th> Step </th>
  	 </tr>

					 <?php
							include "config.php";
							$str = "select * from jobs";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['id']. "</td>";
								echo "<td>" .$row['company_name']. "</td>";
								echo "<td>" .$row['position']. "</td>";
                                echo "<td>" .$row['location']. "</td>";
                                echo "<td>" .$row['job_post']. "</td>";
                                echo "<td>" .$row['skills']. "</td>";
                                echo "<td>" .$row['time']. "</td>";
                                echo "<td>" .$row['salary']. "</td>";
                                echo "<td>" .$row['employer_id']. "</td>";
                                echo "<td>" .$row['step']. "</td>";
                            


								echo "</tr>";

							}
							?>
				 </table>
	

			 </div>
		 </div>
	 </div>
 </div>


