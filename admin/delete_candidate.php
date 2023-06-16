<?php
include "config.php";
$str="update candidate_reg set status='pending' where candidate_id = ".$_GET['candidate_id'];
$result = mysqli_query($con,$str);
if($result){
    header("location:reg_candidate.php");
}
?>