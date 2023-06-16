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
<title>State Page</title>
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
	include 'header.php';
?>

<?php
	include 'menu.php';
?>

</html>
<?php
$a = "";
if(isset($_GET['stateid']))
{
	include 'config.php';
	$str = "select * from statemaster where stateid=".$_GET['stateid'];
	$result = mysqli_query($con, $str);
	$r = mysqli_fetch_array($result);
	$a = $r['statename'];
}
?>	
	<ol class="breadcrumb">
					<li class="breadcrumb-item"><a style='background: #fff !important;' href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>State</li>
	</ol>
	<div class="page-container">
			<div class="grid-form1">
			<h3>State</h3>
				<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" method="post" action="
	<?php	if(isset($_GET['stateid']))
	{
		echo "updateState.php?stateid=".$_GET['stateid'];
	}
	else
	{
		echo "addState.php";
	}
	?>">
			<div class="form-group">
			<div class="form-group">
		<label for="inputadd4reg" class="col-sm-2 control-label hor-form">State</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="inputadd4reg" name="statename" placeholder="Enter your state" value="<?php echo $a; ?>" required>

			</div>
	</div>
				<div class="col-sm-8 col-sm-offset-2">
					<br/> <br/>
					<div>
					<button class="btn-primary btn">Submit</button>
					<input type="reset" class="btn-inverse btn" value="Cancel" > 
			
					<br/>
				</div>
				</form>
				<br/><br/>
</div>

			<div class="container">
				<div class="row">
					<div class="col m-auto">
						<div class="card mt-5">
		<table id="table">
		<tr >
		<th> Stateid </th>
		<th> Name </th>
		<th> Edit </th>
		<th> Delete </th>
		</tr>
		<?php
			$con = mysqli_connect ("localhost","root","","job_db");
			$str = "select * from statemaster";
			$result = mysqli_query($con,$str);
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>" .$row['stateid']. "</td>";
				echo "<td>" .$row['statename']. "</td>";

			echo "<td> <a style='background: #fff !important;' href = 'state.php?stateid=".$row['stateid']."'>Edit </a> </td>";
			echo "<td> <a style='background: #fff !important;' href = 'deleteState.php?stateid=".$row['stateid']."'>Delete </a> </td>";
			echo "</tr>";

			}
        ?>
</table>
</div>
</div>
</div>
</div>

