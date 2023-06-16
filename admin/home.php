<?php
session_start();
if (!isset($_SESSION['name']))
{
    header("Location: http://localhost/job/login.php");
    die();
}
elseif($_SESSION["type"] != 'admin')
{
	header("Location: http://localhost/job/login.php");
    die();
}
?>
<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>



</head>

<?php

include 'menu.php';

?>


<?php
$con = mysqli_connect("localhost","root","","job_db");

$str = "select*from employer_reg where status='accepted' ";
$result = mysqli_query($con,$str);
$tutornumber = mysqli_num_rows($result);

$string = "select*from candidate_reg  ";
$results = mysqli_query($con,$string);
$parentnumber = mysqli_num_rows($results);

$string2 = "select*from contactus ";
$results2 = mysqli_query($con,$string2);
$bookingnumber = mysqli_num_rows($results2);

$string1 = "select*from jobs  ";
$results1 = mysqli_query($con,$string1);
$ebooknumber = mysqli_num_rows($results1);
$results2 = mysqli_query($con,$string2);
$bookingnumber = mysqli_num_rows($results2);

$strdestut ="select*from employer_reg order by employer_id DESC LIMIT 4";
$restut =mysqli_query($con,$strdestut);

$strdespar ="select*from candidate_reg order by candidate_id DESC LIMIT 4";
$respar =mysqli_query($con,$strdespar);

$strresbook ="select*from jobs order by id DESC LIMIT 4";
$resbook =mysqli_query($con,$strresbook);

?>


<ol class="breadcrumb">
                <li class="breadcrumb-item"><a style="background: #fff !important;" href="home.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>


<!--four-grids here-->

<div class="four-grids">
					<div class="col-md-4 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Employer</h3>
								<?php echo"<h4>$tutornumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="col-md-4 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>candidate</h3>
							 <?php echo"<h4>$parentnumber</h4>"; ?> 

							</div>

						</div>
					</div>
					<div class="col-md-4 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Job</h3>
								<?php echo"<h4>$ebooknumber</h4>"; ?>

							</div>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->

<!-- chart start -->
<div style="display: flex;
    		justify-content: space-between;
    		align-items: center;
			margin: 0px 0px 30px;">
	<canvas id="myChart" style="width:100%;max-width:785px;
								background: white;
								padding:20px;"></canvas>
	
	<canvas id="myChartLine" style="width:100%;max-width:785px;
								background: white;
								padding:20px;"></canvas>




</div>
<div style="display: flex;
    		justify-content: space-between;
    		align-items: center;
			margin: 0px 0px 30px;">
	<canvas id="myChartMultiLine" style="dispaly:block;width:100%;max-width:1000px;
								background: white;
								padding:20px;
								margin: auto;"></canvas>
</div>
<!-- end chart  -->



					<div>
                        <div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New Employers</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($tutrow=mysqli_fetch_array($restut))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='../$tutrow[photo]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$tutrow[f_name]</div>
                                                	<small class='lg-item-text'>$tutrow[l_name]</small>
                                                </div>
												<div>
												
												</div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$tutrow[phone]</div>
                                                </div>
                                            </div>
										</a>";
									}
                           ?>


                                   	</div>
                                </div>
                            </div>
							</div>
						</div>

						<div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New candidate</h3>
                                </div>
                                <div class="card-body p-b-20">
                                    <div class="list-group">

									<?php
									while($parrow=mysqli_fetch_array($respar))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             <div class='pull-left'>
                                                <img class='lg-item-img' src='../$parrow[photo]' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$parrow[f_name]</div>
                                                	<small class='lg-item-text'>$parrow[l_name]</small>
                                                </div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$parrow[phone]</div>
                                                </div>
                                            </div>
										</a>";
									}
                                    ?>

                                   	</div>
                                </div>
                            </div>
							</div>
						</div>

						<div class="col-sm-4 w3-agileits-crd">

                            <div class="card card-contact-list">
							<div class="agileinfo-cdr">
                                <div class="card-header">
                                    <h3>New job</h3>
                                </div>
                                 <div class="card-body p-b-20">
                                    <div class="list-group">
									<?php
									while($parrow=mysqli_fetch_array($resbook))
                                    {    echo "<a style='background: #fff !important;' class='list-group-item media' href=''>
                                             
                                            <div class='media-body'>
                                                <div class='pull-left'>
                                                	<div class='lg-item-heading'>$parrow[company_name]</div>
                                                	<small class='lg-item-text'>$parrow[position]</small>
                                                </div>
                                                <div class='pull-right'>
                                                	<div class='lg-item-heading'>$parrow[salary]</div>
                                                </div>
                                            </div>
										</a>";
									}
                                    ?>
									


                                   	</div> 
                                </div>
                            </div>
							</div>
						</div> 
					</div>




<!-- pie chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script>

	var candidate = <?php echo $parentnumber;?>;

	var employer = <?php echo $tutornumber;?>;



	var xValues = ["candidate", "Employer"];
	var yValues = [candidate, employer];
	var barColors = [
  		"#22beef",
  		"#a2d200",
	  	"#8e44ad"
	];

	new Chart("myChart", {
  		type: "doughnut",
  		data: {
    			labels: xValues,
    		datasets: [{
      			backgroundColor: barColors,
      			data: yValues
    		}]
  		},
  		options: {
    		title: {
      			display: true,
      			text: "Proporation of Registered Admin,candidate and Employer"
    		}
  		}
	});
</script>
<!-- end pie chart -->


<!-- start line bar -->

<?php

	$xValues = array();
	$yValues = array();

	$cuurent_date = date('y-m-d');

	$split_date = str_split($cuurent_date,6);

	$split_date = intval($split_date[1]);
	
	array_push($xValues,$split_date - 4,$split_date - 3,$split_date - 2,$split_date - 1,$split_date);


	foreach ($xValues as $value_line) {
	
		$sql_line = "select COUNT(at_create) as count from `jobs` where day(at_create)=$value_line";
		$result_line = mysqli_query($con,$sql_line);
	
		$r2_line = mysqli_fetch_array($result_line);
		$m = $r2_line['count'];

		array_push($yValues,$m);
	

	}


?>

<script>

	const xValues1 = <?php echo json_encode($xValues);?>;
	const yValues1 = <?php echo json_encode($yValues);?>;

	const speedCanvas = document.getElementById("myChartLine");




	new Chart("myChartLine", {
  		type: "line",
  		data: {
    		labels: xValues1,
    		datasets: [{
		  		label: "JOBS",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: '#E64A19',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: '#E64A19',
		  		pointBackgroundColor: '#FFA726',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded',
      			data: yValues1
    		}]
  		},
  		options: {
    		legend: {display: false},
    		scales: {
    	  			yAxes: [{ticks: {min: 0, max:5}}],
    			},
			title: {
      			display: true,
      			text: "Numbers of JOBS"
    		}
  		}
	});
</script>

<!-- end line bar  -->


<!-- multi-line graph start -->

<?php
	$xValues_date = array();
	$yValues_multi_1 = array();
	$yValues_multi_2 = array();

	$cuurent_date = date('y-m-d');

	$split_date = str_split($cuurent_date,6);

	$split_date = intval($split_date[1]);
		
	array_push($xValues_date,$split_date - 5,$split_date - 4,$split_date - 3,$split_date - 2,$split_date - 1,$split_date);


	foreach ($xValues_date as $value) {
		
		$sql_multi = "select COUNT(at_date) as count from `employer_reg` where day(at_date)=$value";
		$result_Multi = mysqli_query($con,$sql_multi);
		
		$r2 = mysqli_fetch_array($result_Multi);
		$m = $r2['count'];

		array_push($yValues_multi_1,$m);
		

	}


	foreach ($xValues_date as $value) {
		
		$sql_multi = "select COUNT(at_date) as count from `candidate_reg` where day(at_date)=$value";
		$result_Multi = mysqli_query($con,$sql_multi);
		
		$r2 = mysqli_fetch_array($result_Multi);
		$m = $r2['count'];

		array_push($yValues_multi_2,$m);
		

	}
	
?>


<script>
	const xValues_date = <?php echo json_encode($xValues_date);?>;
	const yValues_multi_1 = <?php echo json_encode($yValues_multi_1);?>;
	const yValues_multi_2 = <?php echo json_encode($yValues_multi_2);?>;

	new Chart("myChartMultiLine", {
  		type: "line",
  		data: {
    		labels: xValues_date,
    		datasets: [{
				data: yValues_multi_1,
				label: "Employers",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: '#E64A19',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: '#E64A19',
		  		pointBackgroundColor: '#FFA726',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded'
    		}, { 
	      		data: yValues_multi_2,
				label: "Candidate",
		  		tension: 0.4,
      			cubicInterpolationMode: 'monotone',
      			fill: true,
    	  		borderColor: 'green',
	      		backgroundColor: 'transparent',
      			borderDash: [20, 10, 60, 10],
	  			pointBorderColor: 'green',
		  		pointBackgroundColor: 'green',
	      		pointRadius: 5,
      			pointHoverRadius: 10,
      			pointHitRadius: 30,
      			pointBorderWidth: 4,
      			pointStyle: 'rectRounded'
    		}]
  		},
		options: {
    		legend: {display: false},
    		scales: {
    	  			yAxes: [{ticks: {min: 0, max:3}}],
    			},
			title: {
      			display: true,
      			text: "Numbers of Employers and Candidates"
    		}
  		}
	});
</script>

<!-- multi-line graph ends  -->