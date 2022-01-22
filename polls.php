<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polls </title>
    <link rel="stylesheet" href="styles/pollsstyle.css" class="href">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url(img/back2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0px;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin: 3px 15px;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Modal Body */
        .modal-body {
            padding: 2px 16px;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 60px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        #form input {
            outline: 0;
            border: 1px solid #ddd;
            font-size: 16px;
            width: 100%;
            padding: 15px 10px;
            outline: 0;
            border-radius: 5px;
        }

        .poll-form {
            margin: 0px 270px;
        }

        #form p {
            font-size: 25px;
            margin-bottom: 7px;
        }

        .poll-form button {
            font-size: 18px;
            font-weight: bold;
            margin: auto;
            padding: 10px 15px;
            width: 50%;
            border-radius: 5px;
            border: 0;
            cursor: pointer;
            border-radius: 4px;
        }

        .poll-form button:hover {
            background-color: aqua;
        }
        .dropbtn {
            display: block;
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  border-radius: 10px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: block;
  margin-bottom: 50px;
  border-radius: 10px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  /* min-width: 160px; */
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  border-radius: 10px;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

    </style>
</head>

<body id="body">
    <header>
        <div class="bar" id="head1"> <img src="img/logo.jpg" alt=""></div>
        <div class="bar" id="head2">
            <nav>
                <ul>
                    <li><a href="main2.php"> HOME </a></li>
                    <li><a href="events.html"> EVENTS </a></li>
                    <li><a href="aboutus.html"> ABOUT US </a></li>
                    <li><a href="#"> CONTACT US </a></li>

                </ul>

            </nav>
        </div>
    </header>
    <div class="container" id="container1">
        <h1 style="margin: 44px 155px; margin-right: 10px;"> Welcome </h1>
        <h2> to <br></h2>
        <h3> Polling </h3>

    </div>
    <div class="container" id="container2">
        <p>The Informal polling is a salient feature of our website.</p>
        <p>There several ongoing public events on which you </p>
        <p> can conduct polling For example social disputes, public events etc.</p>
        <p> Please select the given options if you want to </p>
        <p> <b> CONDUCT</b> or <b> Vote </b>in a ongoing poll. </p>

    </div>
    <div id="container3" class="container">
        <h><b> Ongoing polls (Select to partcipate or vote) </b></h>
        <div id="EC">
            <?php
            include '.\dbconnect.php';
            $timezone = date_default_timezone_set('Asia/Kolkata');
            $time1 = date("d");
            $sql = "SELECT * FROM `polls`";
            $result = mysqli_query($conn , $sql);
            while($row = mysqli_fetch_assoc($result)){
                $time2 = date("d", strtotime($row['time']. '+ 7 days'));
                if($time2 <= $time1){
                    // $declartion = "Results are declared";
                    echo '
                    <div class="dropdown">
                        <a class="dropbtn">'. $row['user_name'].'</a>
                        <div class="dropdown-content">
                            <a href="#"> Results are declared, click here to view them. </a>
                        </div>
                    </div>';
                }
                else{
                    // $declartion = "Results will be  declared";
                    echo '
                    <div class="dropdown">
                        <a class="dropbtn">'. $row['user_name'].'</a>
                        <div class="dropdown-content">
                            <a href="#">Results will be  declared </a>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
        <button id="myBtn">Add Event</button>
    </div>
    <footer>
        <h>Copyrights@ Shashwat suthar</h>
    </footer>
    <!-- Modal for the link events button  -->
    <div id="myModal1" class="modal">

        <!-- Modal content -->
        <div class="modal-content" id="mc">
            <span class="close">&times;</span>
            <h> Hii this is the event modal </h> 
        </div>
    </div>
        
        <!-- The add event modals  starts here -->
     <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content" id="mc">
            <span class="close">&times;</span>
            <div class="poll-form">
                <form action="./_polls.php" method="post" id="form">
                    <p> poll Query</p>
                    <input type="Query" name="Query" placeholder="Enter poll Query">
                    <p> Option 1 </p>
                    <input type="Option1" name="Option1" placeholder="Option1">
                    <p> Option 2 </p>
                    <input type="Option2" name="Option2" placeholder="Option2">
                    <br><br>
                    <button type="submit"> post </a></button>
                    <!-- <a href="./register.html" class="href"> Click here to Register </a> -->

                </form>
            </div>
        </div>

    </div>
                

        <!-- <script>
        function func() {
            let container = document.getElementById('EC');
            var x = document.createElement("a");
            var t = document.createTextNode("Event no: $");
            x.setAttribute("href", "#");
            x.setAttribute("class", "Events");
            x.appendChild(t);
            container.appendChild(x);

        }
    </script> -->
        <!-- This is script for the modal  -->
        <script>
            
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            var mc = document.getElementById("mc");
            // When the user clicks on the button, open the modal
            btn.onclick = function () {
                modal.style.display = "block";

            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                     modal.style.display = "none";
                }
            }

        </script>
        <script>
            var b = document.getElementsById("Elink");
            var span = document.getElementsByClassName("close")[0];

            var modal1 = document.getElementById("myModal1");
            b.onclick = function(){
                modal1.style.display = "block";
            }

            span.onclick = function () {
                modal1.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal1.style.display = "none";
                }
            }
            </script>
</body>

</html>