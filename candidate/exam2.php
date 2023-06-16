<?php
include "config.php";

session_start();
if(isset($_SESSION["question_number"])){

    $question_number = $_SESSION["question_number"];
    $job_id = $_SESSION["job_id"];
    $employer_id = $_SESSION["employer_id"];
    $candidate_id = $_SESSION['candidateid'];
    $exam_id = $_SESSION['exam_id'];

    $str="select * from `exam` where job_id=$job_id and employer_id=$employer_id";
     
    $result = mysqli_query($con,$str);
    $r = mysqli_fetch_array($result);

    $_SESSION['exam_id'] = $r['exam_id'];
    $exam_id = $r['exam_id'];
    $job_id = $r['job_id'];
    $employer_id = $r['employer_id'];
    
    $que_4 = $r["que4"];
    $que_5 = $r["que5"];

}
else if($_SESSION["question_number"]<=3){
    
    header("location:exam.php");    

}
else{

    header("location:exam.php");

}


if(isset($_POST["submitAns"])){
    
    
    $Que4 = $_POST["Que4"];
    $Que5 = $_POST["Que5"];

    $sql = "UPDATE `done_exam` SET `que4_ans`='$Que4',`que5_ans`='$Que5' WHERE `candidate_id`=$candidate_id and `job_id`=$job_id and `exam_id`=$exam_id and `employer_id`=$employer_id";        
    $result=mysqli_query($con,$sql);


     if($result){
        
        $_SESSION["question_number"] = 70;

        //done exam
        $sql1 = "SELECT * FROM `done_exam` WHERE `candidate_id`=$candidate_id and `job_id`=$job_id and `exam_id`=$exam_id and `employer_id`=$employer_id";
        $result1 = mysqli_query($con,$sql1);
        $r1 = mysqli_fetch_array($result1);

        $done_exam_id = $r1['id'];
        $exam_id = $r1['exam_id'];
        $que1_ans = $r1['que1_ans'];
        $que2_ans = $r1['que2_ans'];
        $que3_ans = $r1['que3_ans'];
        $job_id = $r1['job_id'];

        //exam
        $sql2 = "SELECT * FROM `exam` WHERE  `job_id`=$job_id and `exam_id`=$exam_id and `employer_id`=$employer_id";
        $result2 = mysqli_query($con,$sql2);
        $r2 = mysqli_fetch_array($result2);

        $que1_Ans_correct = $r2['que1_Ans'];
        $que2_Ans_correct = $r2['que2_Ans'];
        $que3_Ans_correct = $r2['que3_Ans'];

        $score = 0;
        if($que1_ans == $que1_Ans_correct){
            $score = $score + 1; 
        }
        if($que2_ans == $que2_Ans_correct){
            $score = $score + 1; 
        }
        if($que3_ans == $que3_Ans_correct){
            $score = $score + 1; 
        }

        $sql3 = "UPDATE `done_exam` SET `score`='$score' WHERE `candidate_id`=$candidate_id and `job_id`=$job_id and `exam_id`=$exam_id and `employer_id`=$employer_id and `score`=10";        
        $result3 = mysqli_query($con,$sql3);


        if($result3){
            header("location:home.php");
        }

      }
     else{
          die(mysqli_error($con));
     }
}
?>

<html>
    <head>
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
                border-radius: 15px;
            }
            .text-container{
                padding: 0;
            }
            .number{
                margin: 15px auto;
                width: fit-content;
                color:black;
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
                border: 2px solid #29ca8e;
                margin: 0px 7%;
                padding: 0px 20px 5px;
                border-radius: 7px;
                background: #29ca8e;
            }
            form{
                margin: 20px 0;
            }
            [type='submit']{
                background: #29ca8e;
                border: none;
                font-size: 16px;
                color: #fff;
                font-weight: 700;
                text-align: left;
                margin: 20px 0px;
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
        <title>Exam Page</title>
    </head>
<body>
<div class="banner">
          <p><a href="home.php">Back</a> | <span>Attend Exam</span></p>
     </div>
<section class="section-1" id="section-1">
      <main>
          <div class="text-container">
              <p class="number" style="font-family:'Muli', sans-serif;">LAST TWO QUESTIONS</p>
          </div>
          
              <div class="quiz-options">
                <form action="" method="post">
                    
                    <div style="margin: 0px 5% 15px;
                                display: flex;
                                flex-direction: column;">
                        <label style="font-family:'Nunito', sans-serif; color:black; font-size:22px;"><?php echo $que_4?></label>  
                        <textarea style="resize: none;
                                        outline: none;
                                        padding: 5px 10px;
                                        border-radius: 5px;
                                        border: 1px solid #ccc;
                                        margin: 5px 0 0;" name="Que4" id="" cols="80%" rows="6" placeholder="Give your answer" class="form-control" required></textarea>
                    </div>
                    <br>
                    <div style="margin: 0px 5% 0;
                                    display: flex;
                                    flex-direction: column;">
                        <label  style="font-family:'Nunito', sans-serif; color:black; font-size:22px;"><?php echo $que_5?></label>  
                        <textarea style="resize: none;
                                        outline: none;
                                        padding: 5px 10px;
                                        border-radius: 5px;
                                        border: 1px solid #ccc;
                                        margin: 5px 0 0;" name="Que5" id="" cols="80%" rows="6" placeholder="Give your answer" class="form-control" required></textarea>
                    </div>
                    
                    <input type="hidden" value="<?php echo $job_id?>" name="job_id">
                    <input type="hidden" value="<?php echo $employer_id?>" name="employer_id">
                  <br>
                  <label class="radio-label" for="one-a">
                      <input type="submit" value="submit" name="submitAns"> 
                  </label>
                </form>
              </div>
          
      </main>
  </section>   
</body>
</html>