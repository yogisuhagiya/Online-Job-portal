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
<title>City Page</title>
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
</html>

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a style='background: #fff !important;' href="home.php">Home</a><i class="fa fa-angle-right"></i>Masters<i class="fa fa-angle-right"></i>City</li>
            </ol>

 <div class="page-container">
 	    <div class="grid-form1">
  	       <h3>City</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">

		<?php
		$a = "";

		if(isset($_GET['cityid']))
		{
			include "config.php";
			$str = "select * from citymaster where cityid=".$_GET['cityid'];
			$result = mysqli_query($con, $str);
			$r = mysqli_fetch_array($result);
			$a = $r['cityname'];

		}
	?>
							<form class="form-horizontal" method="post" action="<?php
 if(isset($_GET['cityid']))
 {
	 echo "updateCity.php?cityid=".$_GET['cityid'];
 }
 else
 {
	 echo "addCity.php";
 }
 ?>">
								<div class="form-group">

								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select your state :</label>
									<div class="col-sm-8">
									<select name="state"  class="form-control1">
									<option>--Select State--</option>
									<?php
										include "config.php";
										$str="select*from statemaster";
										$result= mysqli_query($con,$str);
										while($row=mysqli_fetch_array($result))
										{
											echo "<option value=".$row['stateid'].">".$row['statename']."</option>";
										}
										echo "</select>";
									?>
								</div>
								</div>
								<div class="form-group">
    <label for="inputadd4reg" class="col-sm-2 control-label hor-form">City</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="city" id="inputadd4reg" placeholder="Enter your city" value="<?php echo $a; ?>" required>
    </div>
</div>
<div class="col-sm-8 col-sm-offset-2">
<br/> <br/>
<div>
<button class="btn-primary btn">Submit</button>
<input type="reset" class="btn-inverse btn" value="Cancel" > 
			
			</div>
			</form>
			</div>
			</div>
            </div>
	   <br/>
	   <div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
	 <table id="table">
	<thead>
	 <tr>
	 <th> City Id </th>
	 <th> State Name </th>
	 <th> City Name </th>

	 <th> Edit  </th>
	 <th> Delete </th>
	 </tr>
		 </thead>

					 <?php
							include "config.php";
							$str = "select * from citymaster";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>" .$row['cityid']. "</td>";
								$okyar=$row['stateid'];
								$query = "SELECT statename FROM `statemaster` WHERE stateid='$okyar'";
								$results = mysqli_query($con,$query);
								$roww = mysqli_fetch_assoc($results);
								echo "<td>" .$roww['statename']. "</td>";
								echo "<td>" .$row['cityname']. "</td>";
								$row['stateid'];
								echo "<td> <a style='background: #fff !important;' href = 'city.php?cityid=".$row['cityid']."'>Edit </a> </td>";
								echo "<td> <a style='background: #fff !important;' href = 'deletecity.php?cityid=".$row['cityid']."'>Delete </a> </td>";
								echo "</tr>";
							}
							?>
				 </table>
			 </div>
		 </div>
	 </div>
 </div>

