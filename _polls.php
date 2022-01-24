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
// if($result){
//     $_SESSION['pq'] = $PQuestion;
//     header("location: mail.php");
// }
// else{
//     echo "Query was not succefully inserted";
// }
$sql1 = "SELECT * FROM `polls` WHERE poll_question = '$PQuestion'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$p_id = $row['poll id']; 
if($result){
    header("location: mail.php?pid=".$p_id." ");
}
else{
    echo 'Query not succesfull';
}
?>