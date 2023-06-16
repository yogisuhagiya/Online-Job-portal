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

$a="accepted";
$b="rejected";
$c = $_POST['hiddenname'];

include 'config.php';
$selected_radio = $_POST['radiob'];

        $result = mysqli_query($con, "SELECT *from employer_reg WHERE employer_id='" . $c . "'");
        $row = mysqli_fetch_array($result);
        if ($_POST["radiob"] == "accepted") {
            mysqli_query($con, "UPDATE employer_reg set status='" . $_POST["radiob"] . "' WHERE employer_id='" . $c . "'");
            header("location:panding_employer.php");

        } elseif($_POST["radiob"] == "rejected")
        {
            mysqli_query($con, "UPDATE employer_reg set status='" . $_POST["radiob"] . "' WHERE employer_id='" . $c. "'");
            header("location:panding_employer.php");
        }
        else
        {
            echo "<script type='text/javascript'>alert('Wrong Output')</script>";   
        }
header("location:panding_employer.php");
?>


