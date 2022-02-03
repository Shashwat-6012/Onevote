<?php

// this file will upload the following information into the database. 

include "./dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $abt = $_POST['_About'];
    $pos = $_POST['position'];
    $p_no = $_POST['participate_no'];
    $file = $_FILES['image'];
    // print_r($file);
    // files start here. 
    $fileName = $_FILES['image']['name'];
    $filetmpname = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];
    $fileError = $_FILES['image']['error'];
    $fileSize = $_FILES['image']['size'];

    $fileExt = explode('.', $fileName);        //This will give the extension by seperating the filename bu the "."
    $fileActuallExt = strtolower(end($fileExt)); // end function will give me the last element of the array. 

    $allowed = array('jpg', 'jpeg' , 'png');
    if(in_array($fileActuallExt, $allowed)){
        if($fileError == 0){
                if($fileSize < 500000){
                    $filenewName = $name.".".$fileActuallExt;  // this will give me a uniq id as a timestap in miliseconds. 
                    $filedestination = 'org_logos/'.$filenewName; 

                    move_uploaded_file($filetmpname, $filedestination);  // This function will actually upload the file in the folder. 
                }else{
                    echo 'File size too big!';
                }
        }else{
            echo 'There was an error uploading the file';
        }
    }else{
        echo 'This extension is not valid';
    }
    // files end here. 

    // Election org details sql query. 

    // $org_id = uniqid('',true);
    // $sql = "INSERT INTO `election_details` (`Org_id`, `Org_name`, `Org_email`, `Org_position`, `Org_about`, `Org_no.ofcandidates`) VALUES ('$org_id', '$name', '$email', '$pos', '$abt', '$p_no')";
    // $result = mysqli_query($conn, $sql);
    // if($result){
    //     echo 'Query was success';
    // } else{
    //     echo 'Query was a fail';
    // }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidates details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .container{
        width: 80vw;
        /* background-color: coral; */
        display: block;
        margin: auto;
        margin-top: 50px;
        border: 2px solid orange;
    }
</style>
</head>
<body>
    <div class="container">
        <?php
        echo '
        <form action="./_candidates.php?org_name='.$name.'&p_no='.$p_no.'" method="post" enctype="multipart/form-data">';
        for($i=1; $i<=$p_no; $i++)
        {
                    echo '
                        <div class="form-floating mb-3">
                            <input name = "p_name_'.$i.'" type="Participat_name" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">'.$i.'st Participants name</label>
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">'.$i.'st Participants Email</span>
                            <input name = "p_email_'.$i.'" type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label"> About </label>
                            <textarea name = "p_about_'.$i.'" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="About the '.$i.'st participant "></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="addon-wrapping">'.$i.'st Participants photo </span>
                            <input  name = "p_image_'.$i.'"type="file" class="form-control" id="inputGroupFile02">
                        </div>';
        }
                    echo '
                        <div >
                          <button type="submit"  class="btn btn-primary">Submit</button>
                        </div>';
        echo'</form>';
        ?>
    </div> 
    
</body>
</html>