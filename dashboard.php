<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH BOARD</title>

</head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="styles/style1.css">

<body>

    <div class="cointainer">
        <div class="navigation">
            <div class="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>



            <ul>
                <li>
                    <a href="#">
                        <span class=" icon">
                            <ion-icon name="logo-venmo"></ion-icon>
                        </span>
                        <span class=" title"><b> votex </b></span>
                    </a>
                </li>
                <li>
                    <a href="main2.php">
                        <span class=" icon">
                            <ion-icon name="filter-outline"></ion-icon>
                        </span>
                        <span class=" title">HOME</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class=" icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class=" title">
                            <?php
                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                                
                                echo $_SESSION['username'];
                                }
                                else{
                                    echo "Please login";
                                }
                            
                            ?>

                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class=" icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class=" title">help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class=" icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class=" title">settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class=" icon">
                            <ion-icon name="podium-outline"></ion-icon>
                        </span>
                        <span class=" title">poll requests</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>



    <!--main-->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="grid-outline"></ion-icon>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <ion-icon name="search-circle-outline"></ion-icon>
                    </label>
                </div>

            </div>


            <!--card box-->
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504 </div>
                        <div class="cardname"> No of votes()</div>
                        <div class="iconbox">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div>
                        <div class="numbers">37 </div>
                        <div class="cardname"> Polls </div>
                        <div class="iconbox">
                            <ion-icon name="podium-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">07 </div>
                        <div class="cardname">participants </div>
                        <div class="iconbox">
                            <ion-icon name="people-circle-outline"></ion-icon>
                        </div>
                    </div>
                </div>
            </div>

            <!--organisations requests-->
            <div class="requests">
                <div class="RecentRequests">
                    <div class="cardHeader"><br><br><br><br><br> <br><br>
                        <h2> Recent Requests</h2>
                        <a href="#" class="btn"> View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>organisations</td>
                                <td> requests</td>
                                <td>due time</td>
                                <td>status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> USMEO.Org </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 4 days</td>
                                <td> in action</td>
                            </tr>

                            <tr>
                                <td> NIT TEAM </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 10 days</td>
                                <td> Completed</td>
                            </tr>

                            <tr>
                                <td> JDP Party</td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 14 days</td>
                                <td> on hold</td>
                            </tr>
                            <tr>
                                <td> KSP GRPS </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 1 MONTH </td>
                                <td> In Acttion</td>
                            </tr>

                            <tr>
                                <td> KSP GRPS </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 1 MONTH </td>
                                <td> In Acttion</td>
                            </tr>

                            <tr>
                                <td> KSP GRPS </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 1 MONTH </td>
                                <td> In Acttion</td>
                            </tr>

                            <tr>
                                <td> KSP GRPS </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 1 MONTH </td>
                                <td> In Acttion</td>
                            </tr>

                            <tr>
                                <td> KSP GRPS </td>
                                <td> hjfbvhfrn vhrgvjgn </td>
                                <td> 1 MONTH </td>
                                <td> In Acttion</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>

</body>

<script>
    // menue toggle
    let toggle = document.querySelector('toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.onclick = function () {
        navigation.classList.toggle('active')
    }
    // add hover class in selected list item
    let list = document.querySelector('.navigation li');
    function activelink() {
        list.forEach((item) =>
            item.classList.remove('hovered'));
        this.classList.add('hovered');
    }
    list.forEach((item) =>
        item.addEventlistener('mouseover', activelink));
</script>


</body>

</html>