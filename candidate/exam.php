<?php
error_reporting(0);
include "config.php";

session_start();

if(isset($_POST["submit"])){
    
    $job_id = $_POST['job_id'];
    $_SESSION['job_id'] = $job_id;

    $employer_id = $_POST['employer_id'];
    $_SESSION['employer_id'] = $employer_id;

    $candidate_id = $_SESSION['candidateid'];


    $str5 = "SELECT * FROM `done_exam` WHERE `employer_id`='$employer_id' and `job_id`='$job_id' and `candidate_id`='$candidate_id'";
    $result5 = mysqli_query($con,$str5);
    $r5 = mysqli_fetch_array($result5);

    
    if(!(is_null($r5['id']))){
        echo '<script>window.alert("Exam is already given..");
        window.location="home.php"</script>';
    }
}

if(($_SESSION["question_number"] == 70)){

    echo '<script>window.alert("Exam is already given..");
    window.location="home.php"</script>';

}
else if($_SESSION["question_number"]>=4){
    header("location:exam2.php");    
}

if((isset($_SESSION["question_number"]) AND $_SESSION["question_number"] < 4)){

    $question_number = $_SESSION["question_number"];

}
else{

    $_SESSION["question_number"] = 1;
    $question_number = $_SESSION["question_number"];

}

if(isset($_POST["submit"])){
    
    $job_id = $_POST['job_id'];
    $_SESSION['job_id'] = $job_id;

    $employer_id = $_POST['employer_id'];
    $_SESSION['employer_id'] = $employer_id;

}
else{    

    $job_id = $_SESSION['job_id'];
    $employer_id = $_SESSION['employer_id'];

}

    $str="select * from `exam` where `job_id`=$job_id and `employer_id`=$employer_id";
     
    $result = mysqli_query($con,$str);
    $r = mysqli_fetch_array($result);

    $_SESSION['exam_id'] = $r['exam_id'];
    $exam_id = $r['exam_id'];
    $job_id = $r['job_id'];
    $employer_id = $r['employer_id'];
    
    
    $question = 'que'.$question_number;
    $question_A = 'que'.$question_number.'_optA';
    $question_B = 'que'.$question_number.'_optB';
    $question_C = 'que'.$question_number.'_optC';
    $question_D = 'que'.$question_number.'_optD';
    $question_Ans = 'que'.$question_number.'_Ans';

    $que = $r[$question];
    $que_optA = $r[$question_A];
    $que_optB = $r[$question_B];
    $que_optC = $r[$question_C];
    $que_optD = $r[$question_D];
    $que_Ans = $r[$question_Ans];


if(isset($_POST["submitAns"])){

    {
        
        $str1="select * from `exam` where `exam_id`=".$_SESSION['exam_id'];
        $result1 = mysqli_query($con,$str1);
        $r1 = mysqli_fetch_array($result1);

        $exam_id = $r1['exam_id'];
        $job_id = $r['job_id'];
        $employer_id = $r['employer_id'];
        $candidate_id = $_SESSION['candidateid'];
    }
    
    
    
    $Answer = $_POST["que_ans"];
    
    if($question_number != 1){

      

        $question_myadmin = 'que'.$question_number.'_ans';
        $sql = "UPDATE `done_exam` SET `$question_myadmin`='$Answer' WHERE `candidate_id`=$candidate_id and `job_id`=$job_id and `exam_id`=$exam_id and `employer_id`=$employer_id";        

    }
    else{

        $sql = "INSERT INTO `done_exam`(`exam_id`, `employer_id`, `candidate_id`, `que1_ans`, `que2_ans`, `que3_ans`, `que4_ans`, `que5_ans`, `score`, `job_id`) VALUES ($exam_id,$employer_id,$candidate_id,'$Answer','6','7','8','9','10',$job_id)";

    }

    $result=mysqli_query($con,$sql);


     if($result){
        
        $_SESSION["question_number"] = $question_number + 1;
        header("location:exam.php");

      }
     else{
          die(mysqli_error($con));
     }
}







?>

<html>
    <head>
        <title>Exam Page</title>
        <style>

            *{
                padding:0;
                margin:0;
            }
            .section-1{
                background:#fff ;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
            }
            main{
                border:1px solid #e3e3e3;
                background-color: #f5f5f5;
                width: 50%;
                margin: 0px auto 0;
                padding: 35px 25px 0;
                height: 65%;
                font-size: 1.6em;
                color:black;
            }
            .text-container{
                padding: 0;
            }
            .number{
                margin: 30px auto;
                width: fit-content;
                font-weight: bold;
            }
            .question{
                margin: 25px 0;
                
            }            
            .quiz-options{
                display: flex;
                flex-direction: column;
            }
            .radio-label{
                border: 1px solid #ccc;
                margin: 7px 0px;
                padding: 7px;
                border-radius:5px;
                
            }
            form{
                margin: 20px 0;
            }
            [type='submit']{
                display: inline-block;
                background: transparent;
                border: none;
                font-size: 1.1rem;
                width: 97%;
                text-align: left;
                color: black;
            }
            .banner {
               height: 50px;
               background: #29ca8e;
               
          }

          .banner p {
               font-size: 20px;
               margin-left: 285px;
               padding-top: 10px;
               font-family: 'Nunito', sans-serif;
          }
          .banner a{
              text-decoration: none;
          }

          .banner span {
               color: #fff;
               letter-spacing: 2px;
          }

          .banner a:hover {
               color: #000;
          }
        </style>
        
    </head>
<body>
<div class="banner">
          <p><a href="home.php">Back</a> | <span>Attend Exam</span></p>
     </div>
<section class="section-1" id="section-1">
      <main>
          <div class="text-container">
              <p class="number" style="font-family:'Muli', sans-serif;">QUESTION <?php echo $question_number?> OF 5</p>
              <br>
              <p class="question" style="font-family:'Nunito', sans-serif;"><?php echo $que ?></p>
          </div>
          
            

              <div class="quiz-options" style="font-family:'Muli', sans-serif;">
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $que_optA?>" name="que_ans">
                    <input type="hidden" value="<?php echo $job_id?>" name="job_id">
                    <input type="hidden" value="<?php echo $employer_id?>" name="employer_id">
                  <label class="radio-label" for="one-a">
                      <input type="submit" value="<?php echo $que_optA?>" name="submitAns"> 
                  </label>
                </form>

                <form action="" method="post">
                    <input type="hidden" value="<?php echo $que_optB?>" name="que_ans">
                    <input type="hidden" value="<?php echo $job_id?>" name="job_id">
                    <input type="hidden" value="<?php echo $employer_id?>" name="employer_id">
                  <label class="radio-label" for="one-a">
                      <input type="submit" value="<?php echo $que_optB?>" name="submitAns">
                  </label>
                </form>

                <form action="" method="post">
                    <input type="hidden" value="<?php echo $que_optC?>" name="que_ans">
                    <input type="hidden" value="<?php echo $job_id?>" name="job_id">
                    <input type="hidden" value="<?php echo $employer_id?>" name="employer_id">
                  <label class="radio-label" for="one-a">
                      <input type="submit" value="<?php echo $que_optC?>" name="submitAns">
                  </label>
                </form>

                <form action="" method="post">
                    <input type="hidden" value="<?php echo $que_optD?>" name="que_ans">
                    <input type="hidden" value="<?php echo $job_id?>" name="job_id">
                    <input type="hidden" value="<?php echo $employer_id?>" name="employer_id">
                  <label class="radio-label" for="one-a">
                      <input type="submit" value="<?php echo $que_optD?>" name="submitAns">
                  </label>
                </form>
              </div>
          
      </main>
  </section> 
</body>
</html>