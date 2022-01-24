<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Poll </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <style>
        .container{
            display: grid;
            grid-template-areas: 
            'wc wc wc wc'
            'polls polls polls polls';
        }
        .wc{
            grid-area: wc;
            height: 37vh;
        }
        .welcome-container{
            /* grid-area: wc; */
            display: block;
            background-color: rgb(165, 110, 197);
            margin: 10px 10px;
            border: 3px solid black;
            border-radius: 20px;
            height: 35vh;
            font-family: 'Pushster', cursive;
            width: 60vw;
            margin: auto;
            margin-top: 20px;
        }
        .polls{
            grid-area: polls;
            /* background-color: peru; */
            margin: 10px 10px;
            /* border: 1px solid black; */
            height: 60vh
        }
        h1 {
            font-size: 70px;
            float:left;
            margin: 2px 160px;
            color:black;
            display: block;
            margin-right: 0px;
        }
        p1{
            display:block;
            float: left;
            margin: 2px 200px;
            /* font-size: 30px; */
        }
        .question {
            display: grid;
            grid-template-areas: 
            'Q Q Q Q'
            'A1 A1 A2 A2';
            width: 90vw;
            height: 160px;
            background-color: azure;
            border: 4px solid black;
            border-radius: 10px;
            margin-right: 0px;
            margin-left: 38px;
            margin-top: 45px;
            margin-bottom: 45px;
            font-family: 'Pushster', cursive;
            
        }
        .Q{
            background-color: aqua;
            grid-area: Q;
            margin: 5px;
            font-size: 20px;
            border: 4px solid black;
            border-radius: 10px;
        }
        .A1 {
            /* background-color: blue; */
            grid-area: A1;
            margin: 5px;
        }
        .A2 {
            /* background-color: brown; */
            grid-area: A2;
            margin: 5px;
        }
        .btn{
            padding: 10px 60px;
            border-radius: 15px;
            font-family: 'Pushster', cursive;
            display: block;
            margin: auto;
            font-size: 20px;
        }
        .btn:hover{
            animation: btn-color 2s infinite;
        }
        @keyframes btn-color {
            0% { background-color: rgb(250, 250, 250);}
            25% {
               background-color:rgb(126, 232, 240);
            }
            50% {
                background-color: rgb(43, 120, 236);
            }
            75% {
                background-color: rgb(110, 226, 235);
            }
            100%{ background-color: rgb(255, 255, 255);}
         }
         h2{
            margin-top: 17px;
            display: inline-block;
            margin-left: 150px;
            color: revert;
            margin-bottom: 15px;
         }

    </style>
</head>
<body>
    <div class="container">
        <div class="wc">
            <div class="welcome-container">
            <h1> Welcome </h1>
            <p1> Hi, <?php echo '<b>'. $_SESSION['username'] .'</b>'?> here are all the polls that you requested. <br> 
            Its a kind request, not to get involved in any kind of malpractise as your account can be banned. <br>
            <b>this is a confidential link share only at your risk. </b> </p1>
            </div>
        </div>
        <div class="polls">
                <?php
                    include '.\dbconnect.php';
                    $name = $_SESSION['username'];
                    $pid = $_GET['pid'];
                    // $PQ = $_SESSION['pq'];
                    // echo gettype($pid);
                    $sql = "SELECT * FROM `polls` WHERE `polls`.`poll id` = '$pid'"; 
                    $result = mysqli_query($conn, $sql); 
                    $row = mysqli_fetch_assoc($result);
                    if($result){
                        $i = 1;
                        $_id = $row['poll id'];
                        echo '  
                                <div class ="question">
                                    <div class="Q">
                                        <h2> '.$i ." ) ". $row['poll_question'].'</h2>
                                    </div>
                                    <div class="A1">
                                        <button id = "btn" class = "btn"> <a href= "count1.php?pollid='. $_id .'">'. $row['poll_ans_1'] .'</a> </button>
                                    </div>
                                    <div class="A2">
                                        <button class = "btn"> <a href= "count2.php?pollid='. $_id .'">'. $row['poll_ans_2']. '</a> </button>
                                    </div>
                                </div>';
                        $i = $i + 1; 
                    }
                    else{
                        echo 'fail';
                    }
                    // $i = 1;
                    // $row = mysqli_fetch_assoc($result)
                    // $_id = $row['poll id'];
                    // echo '  
                    //         <div class ="question">
                    //             <div class="Q">
                    //                 <h2> '.$i ." ) ". $row['poll_question'].'</h2>
                    //             </div>
                    //             <div class="A1">
                    //                 <button id = "btn" class = "btn"> <a href= "count1.php?pollid='. $_id .'">'. $row['poll_ans_1'] .'</a> </button>
                    //             </div>
                    //             <div class="A2">
                    //                 <button class = "btn"> <a href= "count2.php?pollid='. $_id .'">'. $row['poll_ans_2']. '</a> </button>
                    //             </div>
                    //         </div>';
                    // $i = $i + 1; 
                    
                ?>
        </div>
    </div>

</body>
</html>