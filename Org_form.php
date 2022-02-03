<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .container{
        width: 80vw;
        height: 80vh;
        /* background-color: coral; */
        display: block;
        margin: auto;
        margin-top: 50px;
    }
</style>
<body>
    <div class="container">
         
        <form action="./_org.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label"> Name </label>
                <input name = 'Name' type="text" class="form-control" id="formGroupExampleInput" placeholder="Please enter the name of Organization">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input name = 'email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Position to be filled: </span>
                <input name = 'position' type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"> About </label>
                <textarea name = '_About' class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="About the Position to be filled"></textarea>
              </div>
              <div class="input-group mb-3">
                <!-- <button class="btn btn-primary" type="submit" id="button-addon1">Submit</button> -->
                <span class="input-group-text" id="basic-addon3">Enter the number of participants:  </span>
                <input name = "participate_no"type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input name= "image" type="file" class="form-control" id="inputGroupFile01">
              </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>      
</body>
</html>