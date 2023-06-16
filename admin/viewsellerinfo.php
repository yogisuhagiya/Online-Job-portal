<?php
include 'header.php';

?>

<?php
include 'menu.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

<html>
<body>
<div class="page-container">
    <div class="grid-form1">
    <div class="form-group" style="height: 950px;width: 50%; margin: 0 auto; border-width:2px;border-style:groove;border-color:#eb5424;box-shadow:5px">

    <form action="editemployer.php" method="POST">
    <button class="btn-primary btn" style="float: right;text-align:center  " name="sumbitbtn" >Update</button>
    <h2 style="text-align:center; color:#1b93e1"> Employer Profile </h2>
    <?php
    include 'config.php';
    
    $str="select*from employer_reg where employer_id = ".$_GET['employer_id'];
    $result= mysqli_query($con,$str);
    $row=mysqli_fetch_assoc($result);
    $id=$row['employer_id'];

   // echo "<div><img src='profileimages/".$_SESSION['pic']." ></div>";
   echo "<div style='text-align:center;padding-bottom:10px;padding-right:50px'><img class='img-circle profile-img' height=110 width=120 src='http://localhost/job/$row[photo]'></div>";
  echo "<div class='wrapper' style=' width : 500px;  margin: 0 auto; ''>";

    echo"<b>";
    echo "<table id='table'>";
        echo "<tr>";
            echo "<td>";
            echo "<b> First Name: </b";
             echo "</td>";
             echo "<td>";
             echo $row['f_name'];
              echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
            echo "<b> Last Name: </b>";
             echo "</td>";
             echo "<td>";
             echo $row['l_name'];
              echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
            echo "<b>Username :</b>";
            echo "</td>";
                echo "<td>";
                echo $row['username'];
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>";
            echo "<b>Address :</b>";
            echo "</td>";
            echo "<td>";
            echo $row['address'];
            echo "</td>";
        echo "</tr>";
    
            echo "<tr>";
            echo "<td>";
            echo "<b>Contact Number :</b>";
            echo "</td>";
            echo "<td>";
            echo $row['phone'];
            echo "</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>";
            echo "<b>Email Address :</b>";
            echo "</td>";
            echo "<td>";
            echo $row['email'];
    echo "</td>";
    echo "</tr>";


echo "<tr>";
echo "<td>";
echo "<b>State :</b>";
echo "</td>";
echo "<td>";
$string="select * from statemaster where stateid ='$row[state]' ";
$resultsok= mysqli_query($con,$string);
$roww= mysqli_fetch_assoc($resultsok);
echo $roww['statename'];
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<b>City :</b>";
echo "</td>";
echo "<td>";
$stringg="select * from citymaster where cityid ='$row[city]' ";
$resultsokk= mysqli_query($con,$stringg);
$rowww= mysqli_fetch_assoc($resultsokk);
echo $rowww['cityname'];
echo "</td>";
echo "</tr>";
    echo "</table>";
    echo"</b>";
?>
<br></br>

<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="radiob" value="accepted" checked class="custom-control-input">
  <label class="custom-control-label" for="customRadio1" >Accept</label> &nbsp;&nbsp;
  <input type="radio" id="customRadio2" name="radiob" value="rejected" class="custom-control-input">
  <label class="custom-control-label" for="customRadio2">Reject</label>

 <?php
        echo"<input type='hidden' name='hiddenname' value='$id' ";
 ?>

</div>
</div>

    </form>
</div>
</div>
</body>
</html>
