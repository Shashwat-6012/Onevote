<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
<style>
    body{
         display: flex;
         justify-content: center;
    }
    .container1{
           height: 50vh;
           width: 50vw;
           background-color: aquamarine;
           margin-top: 100px;
           border-radius: 10px;
           font-family: 'Pushster', cursive;
           display: none;
    }
    .container1 h{
        display: block;
        font-size: 50px;
        margin: 2px 50px;
    }
    .container1 p{
        display: block;
        font-size: 20px;
        padding: 2px 50px;
        margin-top: 10px;
    }
    .result{
        display: block;
       height: 120px;
       width: 250px;
       border: 1px solid black;
       margin: auto;
       box-shadow: 10px 10px grey;
       font-family: 'Luckiest Guy', cursive;
       background-color: blue;
       animation: size 2s infinite;
    }
    @keyframes size {
        0%{
            height: 120px;
            width: 250px;
        }
        50%{
            height: 130px;
            width: 280px;
        }
        100%{
            height: 120px;
            width: 250px;
        }
        
    }
    /* margin: 31 65  */
    .result h1{
        display: block;
        margin: 26px 50px;  
        color: rgb(255, 166, 0);
        font-size: 55px;
        animation: margin 2s infinite;
    }
    @keyframes margin {
        0%{
            margin: 26px 50px;
        }
        50%{
            margin: 31px 65px;
        }
        100%{
            margin: 26px 50px;
        }
        
        
    }
    .count_down{
           display: block;
           margin: auto;
           height: 500px;
           width: 500px;
           /* border: 1px solid black; */
           margin-top: 50px;
    }

</style>
</head>
<body>
    <div id="count down" class="count_down">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_vvhi1pt7.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"    autoplay></lottie-player>
    </div>
    <div id = "container" class="container1">
        <!-- <h> <b> Hello !</b> </h>
        <p> Results for the polling question. <br>  -->
        <?php
        include './dbconnect.php';
        $id = $_GET['p_id'];
        $sql = "SELECT * FROM `polls` WHERE `polls`.`poll id` = '$id'"; 
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result);
        $cnt1 = $row['poll_count_1'];
        $cnt2 = $row['poll_count_2'];
        if($cnt1>$cnt2){
            $rs = $row['poll_ans_1'];
        }
        else if($cnt2>$cnt1){
            $rs = $row['poll_ans_2'];
        }
        else{
            $rs = 'Draw';
        }
        echo '<h> <b> Hello !</b> </h>
        <p> Results for the polling question. <br>'.$row['poll_question'].'</p> 
        <div class="result">
              <h1>'. $rs .'</h1>
        </div>';
        ?> </p> 
         <!-- <div class="result">
               <h1> VIRAT </h1>
         </div> -->
    </div>
<script> 
     let container = document.getElementById("container");
     let c_d = document.getElementById("count down");
     window.onload = function display(){
        function d(){ container.style.display = "block"; 
                    c_d.style.display = "none"; }
        setTimeout(d, 8170);
     }
</script>
</body>
</html>