<?php
include 'config.php';

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mess=$_POST['message'];

    $sql = "insert into contactus (name,email,message) values('$name','$email','$mess')";
    $result = mysqli_query($con, $sql);
    if($result){
    header("location:contact.php");
    }
    else{
       die(mysqli_error($con));
    }
}

?>