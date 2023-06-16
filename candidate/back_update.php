<?php
error_reporting(0);
session_start();
include "config.php";


$a = $_POST["fname"];
$b = $_POST["lname"];
$c = $_POST["email"];
$d = $_POST["uname"];
$f = $_POST["address"];
$g = $_POST["state"];
$h = $_POST["city"];
$i = $_POST["phoneno"];
$j = $_POST["pincode"];



$_SESSION["fname"]=$a;
$_SESSION["lname"]=$b;
$_SESSION["email"]=$c;
$_SESSION["uname"]=$d;
$_SESSION["mobile"]=$i;
$_SESSION["address"]=$f;
$_SESSION["cityid"]=$h;
$_SESSION["stateid"]=$g;
$_SESSION["pincode"]=$j;


$str = "update candidate_reg set f_name='$a', l_name='$b', email='$c', username='$d', address='$f',
city=$h, state=$g, phone='$i', pin_code='$j' where candidate_id=".$_SESSION['candidateid'];
$result=mysqli_query($con,$str);
//echo $str;

if($result)
{

     	$message = "Profile Updated Sucessfully.";
		echo "<script type='text/javascript'>alert('$message');location='profile.php';</script>";
}
?>