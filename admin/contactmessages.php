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
?>

<?php

include 'header.php';
include 'menu.php';

?>
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a style='background: #fff !important;' href="home.php">Home</a><i class="fa fa-angle-right"></i>Contact Messages</li>
            </ol>
<div class="page-container">
 	    <div class="grid-form1">
			 <h3>Contact Messages</h3>
			 <?php  include 'config.php';
							$str = "select * from contactus";
                            $result = mysqli_query($con,$str);
                            $number = mysqli_num_rows($result);
                            echo"<h4 style='text-align:right'>Number of Messages found: $number</h4>";  ?>
<hr>

  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<div class="form-group">
<div class="container">
	 <div class="row">
	 <div class="col m-auto">
	 <div class="card mt-5">
<b>
	 <table id="table">
	 <tr>
	 <th> Name </th>
	 <th> Email </th>
     <th> Message </th>

	 <th> Delete </th>
	 </tr>

					 <?php
						
							$str = "select * from contactus";
							$result = mysqli_query($con,$str);
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
                                echo "<td>" .$row['name']. "</td>";
								echo "<td>" .$row['email']. "</td>";
                                echo "<td>" .$row['message']. "</td>";

								echo "<td> <a style='background: #fff !important;' href = 'deletemessage.php?contactid=".$row['contactid']."'>Delete </a> </td>";
								echo "</tr>";

							}
							?>


				 </table>
                 </b>

			 </div>
		 </div>
	 </div>
 </div></div></div></div></div></div>
