<?php

include '.\dbconnect.php';

$sql = "SELECT * FROM `polls`";
$result = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($result)){
    echo $row['poll id'];
    echo $row['user_name'];
}
?>