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

include "config.php";

$a=$_POST["state"];
$b=$_POST["city"];

  	$sql_u = "SELECT * FROM citymaster WHERE cityname='$b'";
  	$res_u = mysqli_query($con, $sql_u);
  	
  	if (mysqli_num_rows($res_u) > 0) {
        $errormsg = "CityName already exist";
        echo "<script type='text/javascript'>alert('$errormsg');location='city.php';</script>";                           
        
  	}
      else
      {
           $query = "insert into citymaster(stateid, cityname)values($a,'$b')";
           $results = mysqli_query($con, $query);
           echo 'Saved!';
           header("location:city.php");
           exit();
  	}







?>