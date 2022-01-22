
<?php
include './dbconnect.php';
$id = $_GET['pollid'];
$sql = "SELECT * FROM `polls` WHERE `polls`.`poll id` = '$id'"; 
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_assoc($result);
$count = $row['poll_count_1'];
$count = $count + 1; 
// echo $count; 
$sql1 = "UPDATE `polls` SET `poll_count_1` = '$count' WHERE `polls`.`poll id` = '$id';";
$result = mysqli_query($conn, $sql1);
if($result){
    // echo 'queary updated succesfully';
    header("./poll_link.php?id=".$id);
}
else{ 
    echo 'query didnt update';
}
?>