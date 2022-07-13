<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Claim</title>
    <link rel="stylesheet" href="motorClaim.css">
    <?php
        include("motorClaimProcess.php");
    ?>
</head>
<body>
    <!---Header--->
    <section class="header">
        <!-- <script src="script.js"></script> -->
        <nav>
            <a href="../../Sarindu/index.html"><img src="../img/logo2.png"></a>
            <h1 class="company-name">PRIME INSURANCE</h1>
            <div class="topbtn-links">
                <ul>
                <a href="http://localhost/IWT Final Project/Ranuja/Payment/payment.php"><button class="topbtn">RENEWAL</button></a>
                    <a href="http://localhost/IWT Final Project/Ranuja/Motor claim/motorClaim.php"><button class="topbtn">CLAIM</button></a>
                    <a href="http://localhost/IWT Final Project/Ranuja/signUp/signUp.php"><button class="topbtn-sign">SIGN UP</button></a>
                    <a href="http://localhost/IWT Final Project/Sarindu/login.php"><button class="topbtn-log">LOGIN</button></a>

                </ul>
            </div>
        </nav>
        <hr>
        <nav>
            
            <div class="nav-links">
                <ul>
                    <li><a href="../../Sarindu/index.html">HOME</a></li>
                    <li><a href="../../Shafa/AboutUs.html">ABOUT US</a></li>
                    <li><a href="../../Sarindu/Services.html"><div class="dropdown"><button class="dropbtn">SERVICES</button></a>
                            <div class="dropdown-content">
                                <a href="../../Sarindu/Services.html#comprehensive">Comprehensive</a>
                                <a href="../../Sarindu/Services.html#third-party">Third Party</a>
                                <a href="../../Sarindu/Services.html#PIP">PIP</a>
                            </div>
                      </div></li>
                    <li><a href="../../Shafa/Feedback.html">FEEDBACK</a></li>

                    <div class="search">
                        <input class="srch" type="search" name="" placeholder="Search services">
                        <a href="#"><button class="sbtn">Search<img class="srch-icon" src="../img/search_icon.png"></button></a>
                    </div>
                    
                </ul>
            </div>
        </nav>
        
    </section>

    <!-- Nethmi -->
    <div>
        <img src="../img/accident2.jpg" alt="" class="main-img">
        <br><br>
    </div>

    <div class="main">

        <h1>Motor Claim</h1><br>

        <p class="description">Did you crash your car? Or did someone crash into you?</p><br>
        <p class="description">No problem!! We've got you covered. With prime insurance, making a claim is easy as robbing a child's bank. In case of an accident, you can make a claim in two ways.
            <ul class="list">
                <li>Contact customer hotline</li>
                <li>Fill the claim form</li>
            </ul>
        The steps that you have to follow in both these methods are very simple and to the point.
        </p>

        <br><br>
        <h3>Claim form method</h3><br>

        <ul class="list">
            <li>First fill in the form details vehicle No, NIC No and your personal mobile number</li>

            <li>Next you have to upload photos of the damage that hapenned to your car. (3 clear images in jpg format) </li>

            <li>click on "submit claim button"</li>

            <li>Our team of engineers will asses your damage and will give you an estimate for the cost of repairs</li>

            <li>One of our agents will get in contact with you in a short period of time. You can either collect cash within matters or can contact a garage for the repair and we will sort out everything with the respective garage</li>
        </ul>

        <center>
        <span class="span-row">
            <span class="span-form">
                <form action="motorClaimProcess.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend><h3>Claim Insurance</h3></legend>
                        <div class="input">
                            <label for="vehicleNo">Vehicle Number</label><br>
                            <input type="text" name="vehicleNo" id="vehicleNo" class="input-box" required><br><br>

                            <label for="NIC">NIC number</label><br>
                            <input type="text" name="NIC" id="NIC" class="input-box" required><br><br>

                            <label for="mobile">Mobile Number</label><br>
                            <input type="number" name="mobile" id="mobile" class="input-box" required><br><br>

                            <label for="image">Upload images</label><br><br>
                            <input type="file" name="myFile" id="image"><br><br>
                        </div>

                        <input type="submit" name="submit" value="submit" id="submit">
                        
                    </fieldset>
                </form>
            </span>

            <span>
                <img src="../img/accident.jpg" alt="" id="bottom-img">
            </span>
        </span>
        </center>
    </div>

    <!-- Nethmi -->



    <!---Footer--->
    <footer>
        <div class="row">
            <div class="col">
                <img src="../img/logo2.png" class="flogo">
                <p>Our clients are our values. We serve our best for our clients. We are the most trusted and renowned partners. World premium Insurance coverages for all types of vehicles. We offer what you want. Let us serve you for a better tomorrow..</p>
            </div>
            <div class="col">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="general.html">HOME</a></li>
                    <li><a href="AboutUs.html">ABOUT US</a></li>
                    <li><a href="Services.html">SERVICES</a></li>
                    <li><a href="Feedback.html">FEEDBACK</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>CONTACT US</h3>
                <p>Tel : +94 - 123456789</p>
                <p class="email">Email : assignmentg@gmail.com</p>
                <p>Address : Kandy road,</p>
                <p>Malabe, Western Province,</p>
                <p>Sri Lanka.</p>
            </div>
            <div class="col">
                <h3>FIND US ON</h3>
                <div class="social">
                    <a href="https://www.facebook.com/"><img class="social-icon" src="../img/fb.png"></a>
                    <a href="https://www.twitter.com/"><img class="social-icon" src="../img/twitter.png"></a>
                    <a href="https://www.instagram.com/"><img class="social-icon" src="../img/insta.png"></a>
                    <a href="https://www.linkedin.com/"><img class="social-icon" src="../img/linkedin.png"></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">© 2021 ABC Insurance. All Rights Reserved</p>
    </footer>

</body>
</html>