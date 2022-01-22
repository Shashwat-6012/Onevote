<?php
session_start();
$name = $_SESSION['username'];
include '.\dbconnect.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $PQuestion = $_POST['Query'];
    $OPT1 = $_POST['Option1'];
    $OPT2 = $_POST['Option2'];
    }
$sql = "INSERT INTO `polls` (`user_name`, `poll_question`, `poll_ans_1`, `poll_ans_2`,`time`) VALUES ('$name', '$PQuestion', '$OPT1 ', '$OPT2', CURRENT_TIMESTAMP)";
$result = mysqli_query($conn, $sql);
if($result){
    $_SESSOIN['pq'] = $PQuestion;
    header("location: mail.php");
}
else{
    echo "Query was not succefully inserted";
}
?>