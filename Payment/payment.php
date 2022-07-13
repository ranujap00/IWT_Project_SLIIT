<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="payment.css" type="text/css">

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

    <!-- RANUJA -->
    <center>
        <h1 class="objective">Renewal details</h1>
    </center>
    <br><br>
    <div class="main-body">
        <form action="paymentProcess.php" method="POST" enctype="multipart/form-data">
            <span class="main">
                    <fieldset class="fieldset-1">
                        <!-- <legend>
                            <h2>Personal details</h2>
                        </legend> -->
                        <br>
                        <div class="form-top">
                            <div class="form-row">
                                <label for="fullName" class="personal1">Full Name* </label>
                                <input type="text" name="fullName" class="form-col1" required>

                                <label for="address" class="personal2">Address*</label>
                                <input type="text" name="address" class="form-col2" id="address" required>
                            </div>
                            <div class="form-row">
                                <label for="polID" class="personal1">Policy ID*</label>
                                <input type="text" name="polID" class="form-col1" id="polID" required>

                                <label for="pltNum" class="personal2">Plate Number* </label>
                                <input type="text" name="pltNum" class="form-col2" id="pltNum" required>
                            </div>
                        </div>
                        <hr>

                        <span class="form-bottom">
                            <span class="radio-btn">
                                <h4>Usage of vehicles</h4><br>
                                <input type="radio" name="usage-radio" id="pvt" class="usage" value="Private vehicles">
                                <label for="pvt">Private vehicles</label><br><br>

                                <input type="radio" name="usage-radio" id="mtCycle" class="usage" value="Motor Cycles">
                                <label for="mtCycle">Motor Cycles</label><br><br>

                                <input type="radio" name="usage-radio" id="threewheel" class="usage" value="Threewheelers">
                                <label for="threewheel">Threewheelers</label><br><br>

                                <input type="radio" name="usage-radio" id="com" class="usage" value="Commercial Vehicles">
                                <label for="com"> Commercial Vehicles</label><br>
                            </span>

                            <span class="date-rec">
                                <h4>Date Received*</h4><br>
                                <input type="date" name="recDate" class="date" required>
                                <div class="file-block">
                                    <br><br><br>
                                    <h4>upload documents</h4><br>
                                    <input type="file" name="myFile" class="form-file" required>
                                </div>
                            </span>

                            <span class="date-due">
                                <h4>Date Due*</h4><br>
                                <input type="date" name="dueDate" class="date" required>

                            </span>
                        </span>
                    </fieldset>

                    <fieldset class="fieldset-2">
                        <!-- <legend>
                            <h2>Payment details</h2>
                        </legend> -->
                        <div>
                            <a href="#" name><img src="../img/visa.png" alt="" class="img"></a>
                            <a href="#"><img src="../img/master.png" alt="" class="img"></a>
                            <a href="#"><img src="../img/amex.png" alt="" class="img"></a>
                            <a href="#"><img src="../img/discover.png" alt="" class="img"></a>
                        </div>

                        <input type="text" name="cardholderName" placeholder="cardholder's name" class="card" required>
                        <input type="text" name="cardNumber" placeholder="card Number" class="card"
                            placeholder="xxxx xxxx xxxx xxxx" required>

                        <hr>
                        <div class="exp">
                            <label for="expiry">Expiry</label><br><br>
                            <input type="date" name="expiryDate" id="expiry" class="date" required>
                            <input type="tel" inputmode="numeric" name="cvc" id="" class="cvc" placeholder="CVC" required>
                        </div>

                        <center>
                            <div>
                                <input type="submit" value="submit" name="submit" class="submit">
                            </div>
                        </center>

                    </fieldset>
            </span>

        </form>
    </div>

    <!-- RANUJA -->



    <!---Footer--->
    <footer>
        <div class="row">
            <div class="col">
                <img src="../img/logo2.png" class="flogo">
                <p>Our clients are our values. We serve our best for our clients. We are the most trusted and renowned partners. World premium Insurance coverages for all types of vehicles. We offer what you want. Let us serve you for a better tomorrow.</p>
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
                <p><a href="tel: +94 - 123456789">Tel : +94 - 123456789</a></p>
                <p class="email"><a href="mailto: assignmentg@gmail.com">Email : assignmentg@gmail.com</a></p>
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