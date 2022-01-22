<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/mediaq.css">
    <link rel="stylesheet" href="./main2style.css">
    <style>
        body {
            background-image: url(./back2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #btn {
            padding: 15px 15px;
            border: 'none';
            background-image: url(img/menulogo.png);
            background-size: cover;
            border-radius: 36px;
        }
       
        #head1{
            grid-area: head1;
        }
        #head2 {
            grid-area: head2;
        }
        #head3{
            grid-area: head3;
            display: inline;
            margin: 4px -130px;
        }
        #head3 img{
            width: 70px;
            height: 70px;
            margin: -35px 15px;
            border: 3px solid black;
        }
        .elections{
            color: aliceblue;
            text-decoration: none;
            font-size: 20px;
            animation: link 4s infinite;
        }
        @keyframes link {
            0% { color: aliceblue;}
            25% {
                color:aquamarine;
            }
            50% {
                color: blue;
            }
            75% {
                color: black;
            }
            100%{ color: aliceblue;}
         }
         .elections:hover{
             font-size: 21px;
         }
    </style>
</head>

<body>
    <header>
        <div class="bar" id="head1"> <img src="./logo.jpg" alt=""></div>
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
        <div id="head3" class="bar">
            <?php 
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo "Welcome  ". $_SESSION['username'];
            }
            else{
                echo "Login to start.";
            }
            ?>
            
        </div>
    </header>
    <div class="container">
        <div class="box" id="box1">
            <h3 id="Heading"> <button onclick="func()" id="btn"></button> Menu:</h3>
            <div id="rightnav">
                <div class="table" id="row1">
                    <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                        echo '<a href="logout.php"> Logout </a>';
                        }
                        else{
                            echo '<a href="login.html"> Login </a>';
                        }
                    
                    ?>
                 </div>
                 <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                        echo ' <div class="table" id="row2">
                        <a href="dashboard.php">Dashboard </a>
                    </div>';
                    }
                    ?>
                <div class="table" id="row3"><a href="polls.php"> Polls </a></div>
                <!-- <div class="table" id="row4"><a href="#"> Coments</a></div> -->
            </div>
        </div>
        <div class="box" id="box2">
            <!-- <h2> Ongoing Elections!</h2> -->
            <div class="rightbox" id="column1">
                <img src="./election.jpg" alt="">
            </div>
            <div class="rightbox" id="column2">
                <h> Recent Ongoing Elections!</h>
                <p>
                   <li> <a href="./elections.php" class="elections"> Ongoing, Rotract clubs president election 2021. </a></li>
                   <li> <a href="./elections.php" class="elections"> Ongoing, RCVJ clubs chairmans election 2021.</a></li>
                <p>
            </div>
            <div class="rightbox" id="column3">
                <h> Ongoing Events :</h>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br>
                    Et necessitatibus amet quibusdam doloribus.<br>
                    Facilis minus nemo ex minima cumque doloribus cum odio in. <br>
                <p>
            </div>
            <div class="rightbox" id="column4">
                <img src="./election2.jpg" alt="">
            </div>
        </div>
    </div>

    <footer>
        <h>Copyrights@ Shashwat suthar</h>
    </footer>
    <script>
        function func() {
            let btn = document.getElementById('btn');
            let rightnav = document.getElementById('rightnav');
            if (rightnav.style.display != 'none') {
                rightnav.style.display = 'none';
            }
            else {
                rightnav.style.display = 'block';
            }
        }
    </script>

</body>

</html>