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

	include 'config.php';


	$str = "delete from contactus where contactid = ".$_GET['contactid'];
	mysqli_query($con,$str);
	header("location:contactmessages.php");

?>