<?php
session_start();
include 'config.php';
$employer="employer";
$candidate="candidate";
$admin="admin";
$a=$_POST["role"];
error_reporting(0);
                        if (isset($_POST['uname']) and isset($_POST['password']))
                        {
                        if ($a == $employer)
                        {
                        echo "You have selected employer!<p></p>";

                           // Assigning POST values to variables.
                           $username = $_POST[''uname'];
                           $password = $_POST['password'];
                           //CHECK if the Fields are Empty
                           if($username == "" || $password == "")
                              {
                                 $message="Missing Credentials!";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                                  echo "Empty Login Credentials<p></p>";
                                  Echo("Missing Username or Password!");
                              }

                           // CHECK FOR THE RECORD FROM TABLE
                           $query = "SELECT * FROM `employer_reg` WHERE username='$username' and password='$password'";
                           $result = mysqli_query($con, $query) or die(mysqlsi_error($con));
                           $count = mysqli_num_rows($result);
                           if ($count == 1){

                              $queryy = "SELECT * FROM `employer_reg` WHERE username='$username' AND password='$password'" ;
                              $resultt = mysqli_query($con, $queryy) or die(mysqli_error($con));
                              $re=mysqli_fetch_array($resultt);

                              $_SESSION["idtype"]= "employer";
                              $_SESSION["employerid"]=$re['employer_id'];
                              $_SESSION["company_name"]=$re['company_name'];
                              $_SESSION["designation"]=$re['position'];
                              $_SESSION["fname"]=$re['f_name'];
                              $_SESSION["lname"]=$re['l_name'];
                              $_SESSION["email"]=$re['email'];
                              $_SESSION["uname"]=$re['username'];
                              $_SESSION["mobile"]=$re['phone'];
                              $_SESSION["address"]=$re['address'];
                              $_SESSION["cityid"]=$re['cityid'];
                              $_SESSION["stateid"]=$re['stateid'];
                              $_SESSION["photo"]=$re['photo'];
                              $_SESSION["status"]=$re['status'];
                              $_SESSION["pincode"]=$re['pin_code'];
                              
                              if($re['status'] != 'accepted'){
                                 $message="you have not been Accepted yet by Admin ";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                                 echo "Invalid Login Credentials<p></p>";

                              }else{
                                 
                                 //echo "Login Credentials verified";
                                 echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                                 header("location:http://localhost/job/employer/home.php");
                              }

                           }else{
                           $message="Username and Password does not match !";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";

                           }
                           }

                        if ($a == $candidate)
                        {
                           echo "You have selected tutor!<p></p>";
                           // Assigning POST values to variables.
                           $username = $_POST['uname'];
                           $password = $_POST['password'];

                           //CHECK if the Fields are Empty
                           if($username == "" || $password == "")
                              {
                                 echo "Empty Login Credentials<p></p>";
                                 Echo("Missing Username or Password!");
                                 $message="Missing Credentials!";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";

                              }
                           // CHECK FOR THE RECORD FROM TABLE
                           $query = "SELECT * FROM `candidate_reg` WHERE username='$username' and password='$password'";

                           $result = mysqli_query($con, $query) or die(mysqli_error($con));

                           $count = mysqli_num_rows($result);
                           if ($count == 1){
                              $query = "SELECT * FROM `candidate_reg` WHERE username='$username' AND password='$password'  " ;
                              $result = mysqli_query($con, $query) or die(mysqli_error($con));
                              $re=mysqli_fetch_array($result);

                              $_SESSION["idtype"]= "candidate";
                              $_SESSION["candidateid"]=$re['candidate_id'];
                              
                              $_SESSION["fname"]=$re['f_name'];
                              $_SESSION["lname"]=$re['l_name'];
                              $_SESSION["email"]=$re['email'];
                              $_SESSION["uname"]=$re['username'];
                              $_SESSION["mobile"]=$re['phone'];
                              $_SESSION["address"]=$re['address'];
                              $_SESSION["cityid"]=$re['city'];
                              $_SESSION["stateid"]=$re['state'];
                              $_SESSION["photo"]=$re['photo'];
                              $_SESSION["pincode"]=$re['pin_code'];
                              $_SESSION["status"]=$re['status'];
                              
                              if($re['status'] != 'accepted'){
                                 $message="you have not been Accepted yet by Admin ";
                                 echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                                 echo "Invalid Login Credentials<p></p>";

                              }else{
                                 
                                 //echo "Login Credentials verified";
                                 echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                                 header("location:http://localhost/job/candidate/home.php");
                              }


                           }else{
                              $message="Username and Password does not match";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";

                              }

                           }
                        
                           if ($a == $admin)
                           {
                           echo "You have selected admin!<p></p>";
   
                              // Assigning POST values to variables.
                              $username = $_POST['uname'];
                              $password = $_POST['password'];
                              //CHECK if the Fields are Empty
                              if($username == "" || $password == "")
                                 {
                                    $message="Missing Credentials!";
                                    echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                                     echo "Empty Login Credentials<p></p>";
                                     Echo("Missing Username or Password!");
                                 }
   
                              // CHECK FOR THE RECORD FROM TABLE
                              $query = "SELECT * FROM `adminlogin` WHERE username='$username' and password='$password'";
                              $result = mysqli_query($con, $query) or die(mysqlsi_error($con));
                              $count = mysqli_num_rows($result);
                              if ($count == 1){
   
                                 $queryy = "SELECT * FROM `adminlogin` WHERE username='$username' AND password='$password'  " ;
                                 $resultt = mysqli_query($con, $queryy) or die(mysqli_error($con));
                                 $re=mysqli_fetch_array($resultt);
   
                                 $_SESSION["type"]= "admin";
                                 $_SESSION["adminid"]=$re['adminid'];
                                 $_SESSION["name"]=$re['username'];

                            
                                 
                                 
   
                              //echo "Login Credentials verified";
                              echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
                              header("location:http://localhost/job/admin/home.php");
                              }else{
                              $message="UserName or Password is Not Correct!";
                              echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                              echo "Invalid Login Credentials<p></p>";
   
                              }
                              }




                           if($a != $candidate && $a != $employer && $a != $admin)
                        {
                           $message="Please choose a role";
                           echo "<script type='text/javascript'>alert('$message');location='login.php';</script>";
                           echo "Invalid Login Credentials<p></p>";
                        }

                     }
?>


