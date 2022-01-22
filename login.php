<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '.\dbconnect.php';
  $Email = $_POST['email'];
  $password = $_POST['password'];
}


$sql = "SELECT * FROM `registration` WHERE  email = '$Email' AND cpassword = '$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($num == 1){
  
  session_start();
  $_SESSION['loggedin'] = true; 
  $_SESSION['username'] = $row['name'];
  $_SESSION['email'] = $row['email'];

  header("location: main2.php");
  exit();

}

else{
    echo("The query  was not inserted succesfully");
}

?> 
