<?php
include '.\dbconnect.php';
$timezone = date_default_timezone_set('Asia/Kolkata');
$time1 = date("H:i:s");
echo $time1; 
$sql = "SELECT * FROM `polls`";
$result = mysqli_query($conn , $sql);
$row = mysqli_fetch_assoc($result);
echo '<br>';
echo $row['time']. '<br>';
$time2 = date("H:i:s", strtotime($row['time'].'+ 1 hour'));
echo $time2;
$time3 = "22:12:00";
echo $time3. '<br>';
if($time3 <= $time1){
    echo 'Done working';
}
else{
    echo 'DO something else';
}
?>