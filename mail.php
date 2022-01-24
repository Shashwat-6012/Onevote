<?php
session_start();
$email = $_SESSION['email'];
$id = $_GET['pid'];
// $PQ = $_SESSION['pq'];
// $sql = "SELECT * FROM `polls` WHERE poll_question = '$PQ'"; 
// $result = mysqli_query($conn, $sql); 
// $row = mysqli_fetch_assoc($result);
// $id = $row['poll id'];
$to_email = $email;
$subject = "poll link.";
$body = "Heyy, thank you for subscribing to our poll feature. 
         This is the link for your polls. 
         http://localhost/Voting%20system/poll_link%20.php?pid=".$id." ";
$headers = "From: onevote2022@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    header("location: polls.php");
} else {
    echo "Email sending failed...";
}
?>