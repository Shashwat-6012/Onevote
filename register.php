<?php
// taking the post request from the form 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpasssword = $_POST['cpassword'];
    $Gender = $_POST['gender'];
}
// connecting to the database 
include 'dbconnect.php';

// $sql = "CREATE TABLE `user data612`.`newregistration` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(50) NOT NULL ,  `email` VARCHAR(50) NOT NULL ,  `password` VARCHAR(8) NOT NULL ,  `cpassword` VARCHAR(8) NOT NULL ,  `gender` VARCHAR(11) NOT NULL ,    PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
// $result = mysqli_query($conn, $sql);
// if($result){
//   echo " data table was created";
// }
// else{
//   echo "failed";
// }
// inserting data in tables 
$sql = "INSERT INTO `user data612`.`registration` ( `name`, `email`, `password`, `cpassword`, `gender`) VALUES ('$name', '$email', '$password', '$cpasssword', '$Gender')";
$result = mysqli_query($conn, $sql);

// using Sessions to make a global variable of username 
if(($result) && ($password == $cpassword)){
  header('location: ./login.html');
}
else{
    echo("The query  was not inserted succesfully, check the password");
}

?> 
