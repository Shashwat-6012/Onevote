<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elections.</title>
  <link rel="stylesheet" href="sidebar.css" >
</head>
<style>
  body {
    display: grid;
    background-image: url(img/back2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    /* layout for the body */
    grid-template-areas:
      'header header header header'
      'ssc ssc ssc ssc'
      'head head head head'
      'container1 container2 container2 container2'
      'footer footer footer footer';

  }

  header {
    height: 110px;
    margin-left: -11px;
    margin-right: -11px;
    grid-area: header;
    /* background-color: rgb(39, 36, 36); */
    grid-area: header;
  }

  .bar {
    display: inline-block;
  }

  #head1 {

    margin: 4px 4px;
    padding: 12px 4px;
    width: 10%;
    grid-area: head1;

  }

  #head2 {

    margin: 4px 122px;
    padding: 12px 4px;
    width: 59%;
    grid-area: head2;
  }

  #head3 {
    grid-area: head3;
    display: inline;
    margin: 4px -130px;
  }

  #head3 img {
    width: 70px;
    height: 70px;
    margin: -35px 15px;
    border: 3px solid black;
  }

  nav li {
    list-style-type: none;
    display: inline;
    padding: 15px 13px;
    border-left: 1px solid white;

  }

  nav li:last-child {
    border-right: 1px solid white;
  }

  nav li a {
    color: white;
    padding: 4px 40px;
    text-decoration: none;

  }

  nav li a:hover {
    color: grey;
    text-decoration: underline;
  }

  #head1 img {
    margin: -20px 18px;
    width: 93px;
    height: 61px;
    filter: invert(1);
    border-radius: 36px;
    position: relative;
  }

  #head1:hover {
    position: relative;
    animation: logo 3s infinite;

  }

  @keyframes logo {
    0% {
      top: 0px;
      left: 0px;
    }

    25% {
      top: 0px;
      left: 20px;
    }

    50% {
      top: 20px;
      left: 20px;
    }

    75% {
      top: 20px;
      left: 0px;
    }

    100% {
      top: 0px;
      left: 0px;
    }
  }

  * {
    box-sizing: border-box
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 100vw;
    position: relative;
    margin: auto;
    grid-area: ssc;
    margin-left: -11px;
    margin-right: -11px;
    border-top: 3px solid black;
    height: 60vh;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 30px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  .img {
    height: 60vh;
  }

  .container1 {
    grid-area: container1;
    height: 40vh;
    margin: 2px;
    color: white;
    width: 0vw;
  }

  .container2 {
    grid-area: container2;
    height: 60vh;
    margin: 2px;
    display: grid;
    grid-template-areas: 'card1 card1 card2 card2';
  }

  #heading {
    grid-area: head;
    height: 10vh;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: -11px;
    margin-right: -11px;
    border-top: 4px solid black;
    color: white;
  }

  footer {
    grid-area: footer;
    height: 6vh;
    background-color: white;
    margin-left: -11px;
    margin-right: -11px;
  }

  footer h {
    text-align: center;
    margin: auto;
    padding: 9px 2px;
    display: block;

  }

  #heading h1 {
    text-align: center;
    margin: auto;
    padding: 9px 2px;
    display: block;
  }

  .table {
    margin: 20px 0px;
    padding: 4px 4px;
    text-decoration: none;
    border: 2px solid whitesmoke;
    border-radius: 32px;
    width: 100px;
    list-style-type: none;
    margin-left: 70px;
    margin-right: -80px;
    /* display: block;
    margin: auto;
    margin-bottom: 10px; */

  }

  .table a {
    margin: 4px 15px;
    padding: 0%;
    text-align: center center;
    color: #f0f8ff;
    text-decoration: none;
  }

  .table a:hover {

    font-size: 20px;
    text-decoration: underline;
    color: black;
    box-sizing: border-box;
  }

  #btn {
    padding: 15px 15px;
    border: 'none';
    background-image: url(img/menulogo.png);
    background-size: cover;
    border-radius: 36px;
  }

  .container1 h3 {
    display: block;
    margin: auto;
  }

  .cards {
    margin: 20px;
    color: white;
    width: 200px;
    height: 200px;
  }

  #card1 {
    /* background-color: red; */
    grid-area: card1;
    margin-left: 25vw;

  }

  #card2 {

    grid-area: card2;
  }

  #card1 h1 {
    font-size: 20px;
    margin: 2px 38px;
  }

  #card2 h1 {
    font-size: 20px;
    margin: 2px 38px;
  }

  .electclub {
    height: 150px;
    width: 200px;
  }

  .electclub:hover {
    height: 160px;
    width: 210px;
  }
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
  position: fixed;
  bottom: 0;
  background-color: #fefefe;
  width: 100%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {
    padding: 2px 16px;
    display: grid;
    grid-template-areas: 
    'top top top top'
    'left left right right'
    ;
}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}
.container{
    margin: 4px;
    height: 25vh;
    display: grid;
}
#top{
    grid-area: top;
    background-color: red;
    grid-template-areas: 'img info info info';
}
#right{
    grid-area: right;
    /* background-color: blue; */
}
#left{
    grid-area: left;
    /* background-color: black; */
}
.info{
    height: 25vh;
}
</style>

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
  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,water" style="width:100%">
      <div class="text">Caption one</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,fire" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img class="img" src="https://source.unsplash.com/1600x900/?nature,land" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
  </div>
  <br>

  <!-- The dots/circles -->
  <!-- <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div> -->
  <div id="heading">
    <h1> Election catalogs.</h1>
  </div>
  <div class="container1">
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
      <div class="table" id="row2"><a href="dashboard.html">Dashboard </a></div>
      <div class="table" id="row3"><a href="polls.html"> Polls </a></div>
      <!-- <div class="table" id="row4"><a href="#"> Coments</a></div> -->
    </div>
  </div>
  <div class="container2">
    <div class="cards" id="card1">
      <h1> Rotract club's Presidential election 2020.</h1>
      <button id="Btn"> <img src="img/rotract.jpg" class="electclub" alt=""></button>
    </div>
    <div class="cards" id="card2">
      <h1> RCVJ club's chairman's election 2020.</h1>
      <!-- <a href="#" id="myBtn"> <img src="img/rcvj.jpg" class="electclub" alt=""></a> -->
       <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                        
                        echo '<button id="myBtn"> <img src="img/rcvj.jpg" class="electclub" alt=""></button>';
                        }
                        else{
                            echo '<a href="login.html" id="myBtn"> <img src="img/rcvj.jpg" class="electclub" alt=""></a>';
                        }
                    
                    ?> 
    </div>
  </div>

  <footer>
    <h> Copyrights@shashwat suthar </h>
  </footer>
  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2> Voting portal </h2>
      </div>
      <div class="modal-body">
          <div class="container" id="top"> 
              <img src="img/rcvj.jpg" alt="" style="height: 25vh; grid-area: img; margin-left: 2vw;">
              <div class="info" style="grid-area: info; ">
                  About the club. 
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, omnis.
              </div>
           </div>
          <div class="container" id="left"> 
              <a id = "link" href="javascript:void(0)" onclick="openNav()"> vote </a>
          </div>
          <div class="container" id="right"> 
              <a href="#" class="href"> participate </a>
          </div>
      </div>
      <div class="modal-footer">
         <h3> <?php echo "Welcome  ". $_SESSION['username'];?>  </h3> 
      </div>
    </div>
  <!-- Modal end  -->
  </div>


  <!-- Sidebar start -->
  <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1> Welcome </h1>
        <p1> <b>to the rotract elections 2021 </b></p1>
        <div class="container">
              <img src="img/rotract.jpg" alt="" class="image">
              <p2> About the club 

                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates nesciunt modi aliquam natus
              </p2>
        </div>
        <div class="card-container">
          <h1> PARTICIPANTS </h1>
          <a href="" class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/user-img.png" alt="Avatar" style="width:200px;height:200px; border-radius: 10px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </a>
          <a href="" class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/user-img.png" alt="Avatar" style="width:200px;height:200px; border-radius:10px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </a>
          <a href="" class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="img/user-img.png" alt="Avatar" style="width:200px;height:200px;border-radius:10px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </a>
        </div>
    </div>
    <!-- siderbar ends  -->

  <!-- // scripts start here -->
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }
  </script>

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
    }</script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // get the anchor tags 
      var anchor = document.getElementById("link");
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      anchor.onclick = function() {
        modal.style.display = "none";
        document.getElementById("mySidebar").style.width = "31vw";
        document.getElementById("main").style.marginLeft = "31vw";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
       
      <!-- Script for sidebar -->
      <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        // function openNav() {
        //     document.getElementById("mySidebar").style.width = "400px";
        //     document.getElementById("main").style.marginLeft = "400px";
        // }
        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</body>

</html>