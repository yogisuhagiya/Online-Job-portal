<?php
include "config.php";
$str="update employer_reg set `status`='pending' where employer_id = ".$_GET['employer_id'];
$result = mysqli_query($con,$str);
if($result){
    header("location:reg_employer.php");
}
?>