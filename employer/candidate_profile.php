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

<html>

<head>

	<title>Candidate Profile</title>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/owl.carousel.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="./css/style.css">
	<style>
		.panel-info>.panel-heading{
			color: #fff;
    	background-color: #29ca8e;
    	border-color: #000;
		}
		.row-soni{
			display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
		}
		
		</style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
	




	<?php  

								if(isset($_POST['submit'])){

                                    $candidate_id = $_POST['candidate_id'];

                                }
								else{
									header("location:review_exam.php");
								}
								$str = "select * from candidate_reg where candidate_id=$candidate_id";
								$result = mysqli_query($con,$str);
								$r = mysqli_fetch_array($result);

								$candidate_id = $r["candidate_id"];
								$f_name = $r["f_name"];
                                $l_name = $r["l_name"];
								$email = $r["email"];
								$phone = $r["phone"];
                              	$address = $r["address"];
                              	$city = $r["city"];
                              	$state = $r["state"];
                                $pin_code = $r["pin_code"];
                                $username = $r['username'];
								$photo = $r['photo'];
								
								// select city name from city master table
								$city_str = "select * from citymaster where cityid=$city";
								$city_result = mysqli_query($con,$city_str);
								$city_r = mysqli_fetch_array($city_result);

								$cityname = $city_r["cityname"];
                              	
								
								// select state name from state master table
								$state_str = "select * from statemaster where stateid=$state";
								$state_result = mysqli_query($con,$state_str);
								$state_r = mysqli_fetch_array($state_result);


								$statename = $state_r["statename"];

                              	

								
		
							?>
							<br>
							<br>
							<br>
							<br>
							<br>
							
	<div class="container">
		<div
			class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">

			<div class="panel panel-info">
				<div class="panel-heading">
					<h1 class="panel-title" align="center"><?php echo $f_name?>'s Profile</h1>
				</div>
				<div class="panel-body">
					<div class="row-soni">
						<br>
                        <center><img src="http://localhost/job/<?php echo $photo;?>" height='100px'></center>
						<br>
						<br>
						
						<div class=" col-md-9 col-lg-9 ">
	
							<table class="table table-user-information">
								
								<tbody>
									<tr>
										<th>Id </th>
										<td>
											<?php  echo $candidate_id;  ?>
										</td>
									</tr>
							

									<tr>
										<th>First Name </th>
										<td>
											<?php  echo $f_name;  ?>
										</td>
									</tr>

									<tr>
										<th>Last Name </th>
										<td>
											<?php  echo $l_name;  ?>
										</td>
									</tr>


									<tr>
										<th>Address </th>
										<td>
											<?php  echo $address;  ?>
										</td>
									</tr>


									<tr>
										<th>Mobile No </th>
										<td>
											<?php  echo $phone;  ?>
										</td>
									</tr>


									<tr>
										<th>Email </th>
										<td>
											<?php  echo $email;  ?>
										</td>
									</tr>


									<tr>
										<th>User Name </th>
										<td>
											<?php  echo $username;  ?>
										</td>
									</tr>


									<tr>
										<th>Pincode </th>
										<td>
											<?php  echo $pin_code;  ?>
										</td>
									</tr>

									<tr>
										<th>City </th>
										<td>
											<?php  echo $cityname;  ?>
										</td>
									</tr>

									<tr>
										<th>State </th>
										<td>
											<?php  echo $statename;  ?>
										</td>
									</tr>

									

									

								</tbody>
								
							</table>
							<form action="select_candidate.php" method="post" style="display: inline-block;margin-right: 15px;">
                                <input type="hidden" name="candidate_id" value="<?php echo $_POST['candidate_id'];?>">
                                <input type="hidden" name="job_id" value="<?php echo $_POST['job_id'];?>">
                            	<input type="submit" name="submit_select" value="Select" style="outline: none;
    																							color: #fff;
    																							background: #07f538;
    																							border: none;
    																							width: 85px;
    																							height: 35px;
    																							font-size: 1.5rem;
    																							border-radius: 10px;">
                            </form>

							<form action="select_candidate.php" method="post" style="display: inline-block;">
                                <input type="hidden" name="candidate_id" value="<?php echo $_POST['candidate_id'];?>">
                                <input type="hidden" name="job_id" value="<?php echo $_POST['job_id'];?>">
                            	<input type="submit" name="submit_reject" value="Reject" style="outline: none;
    																							color: #fff;
    																							background: #f51f07;
    																							border: none;
    																							width: 85px;
    																							height: 35px;
    																							font-size: 1.5rem;
    																							border-radius: 10px;">
                            </form>


						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	</div>




</body>

</html>
