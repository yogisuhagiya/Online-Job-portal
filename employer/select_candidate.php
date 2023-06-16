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

<?php


if(isset($_POST['submit_select'])){
    $candidate_id = $_POST['candidate_id'];
    $job_id = $_POST['job_id'];
    $employer_id = $_SESSION["employerid"];


    $str = "INSERT INTO `selected_candidate`(`candidate_id`, `employer_id`, `job_id`, `at_date`) VALUES ($candidate_id,$employer_id,$job_id,CURRENT_TIMESTAMP())";
    $result = mysqli_query($con,$str);
    if($result){

        $str2 = "UPDATE `done_exam` SET `candidate_status`='selected' WHERE candidate_id = $candidate_id and employer_id = $employer_id and job_id = $job_id";
        $result2 = mysqli_query($con,$str2);
        if($result2){
        
            header("location:review_exam.php");
        }

    }
}

if(isset($_POST['submit_reject'])){
    $candidate_id = $_POST['candidate_id'];
    $job_id = $_POST['job_id'];
    $employer_id = $_SESSION["employerid"];

    $str = "UPDATE `done_exam` SET `candidate_status`='rejected' WHERE candidate_id = $candidate_id and employer_id = $employer_id and job_id = $job_id";
    $result = mysqli_query($con,$str);
    if($result){
        
        $str2 = "DELETE FROM `selected_candidate` WHERE candidate_id = $candidate_id and employer_id = $employer_id and job_id = $job_id";
        $result2 = mysqli_query($con,$str2);
        if($result2){
        
            header("location:review_exam.php");
        }
        else{

            header("location:review_exam.php");
        }

    }
}
?>