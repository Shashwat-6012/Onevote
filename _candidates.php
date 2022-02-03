<?php
include './dbconnect.php';

$org_name = $_GET['org_name'];
$pno = $_GET['p_no'];
$table_name = $org_name.'_Candidates';
// echo $org_name;
// echo $pno;
$p_name = array();
$email = array();
$_abt = array();
$sql1 = "CREATE TABLE `user data612`.`$table_name` ( `sr no` INT NOT NULL AUTO_INCREMENT ,  `p_name` VARCHAR(50) NOT NULL ,  `p_email` VARCHAR(50) NOT NULL ,  `p_about` TEXT NOT NULL , `Vote_no` INT(11) NOT NULL , PRIMARY KEY  (`sr no`)) ENGINE = InnoDB;";
$result = mysqli_query($conn, $sql1);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
   for($i=1; $i<=$pno; $i++){
       $p_name[$i] = $_POST['p_name_'.$i]; 
       $email[$i] = $_POST['p_email_'.$i];
       $_abt[$i] = $_POST['p_about_'.$i];
   }
   for($i = 1; $i<=$pno; $i++){
    //    $name =  $p_name[$i];
    //    $email =  $email[$i];
    //    $abt = $_abt[$i];
       $sql2 = "INSERT INTO `$table_name` (`p_name`, `p_email`, `p_about`,`vote_no`) VALUES ('$p_name[$i]', '$email[$i]','$_abt[$i]', 0)";
       $result = mysqli_query($conn, $sql2);
       if($result){ 
           header('location: ./main2.php');
    }
       else{
           echo 'fail';
       }
       
   }
}

?>