<?php

    include "config.php";

    $search = $_POST['search'];


    $str="select * from `jobs` where `step`=6 and `job_post` like '%{$search}%'";

	$result = mysqli_query($con,$str);

    if(mysqli_num_rows($result) > 0){

        while($r = mysqli_fetch_assoc($result)){
            $m = $r['id'];
            $a = $r['company_name'];
            $b = $r['company_photo'];
            $c = $r['position'];
            $d = $r['location'];
            $e = $r['job_post'];
            $f = $r['skills'];
            $i = $r['descriprition'];  
            $g = $r['time'];
            $h = $r['salary'];
            $s = $r['step'];
            $j = $r['at_create'];  



        echo '<div class="col-lg-4 col-md-4 col-sm-6">
                <div class="courses-thumb courses-thumb-secondary">
                    <div class="courses-top">
                        <div class="courses-image">
                            <img src="../'.$b.'" class="img-responsive" alt="">
                        </div>
                        <div class="courses-date">
                            <span title="Posted on"><i class="fa fa-calendar"></i> '.date("d-m-Y",strtotime($j)).'</span>
                            <span title="Location"><i class="fa fa-map-marker"></i>'.$d.'</span>
                        </div>
                    </div>
    
                    <div class="courses-detail">
                        <h3>'.$e.'</h3>
    
                        <p class="lead"><strong>'.$h.'</strong></p>
    
                    </div>
    
                    <div class="courses-info">
                        <form action="job-details.php" method="post">
                            <input type="hidden" value="'.$m.'" name="job_id">
                                                     
                            <input type="submit" class="section-btn btn btn-primary btn-block" value="View Details" name="submitjb">
                        </form>
                    </div>
                </div>
            </div>';

        }



    }else{
        echo '<center><h3>Data Not Found</h3></center>';
    }

?>