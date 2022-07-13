<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="signUp.css">
    <?php
        include("signUpProcess.php");
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


    <!-- RANUJA -->
    <form action="signUpProcess.php" method="POST">
        <span>
            <img src="../img/driving.jpg" alt="" class="img">
            <span>
                <div class="form">
                    <div class="tab-header">
                        <div class="active">Personal Details</div>
                        <div class="active">Sign In</div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-body active">
                            <div class="form-element">
                                <input type="text" name="fullName" placeholder="Full Name" required>
                            </div>

                            <div class="form-element">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="form-element">
                                <input type="text" name="NIC" placeholder="NIC" required>
                            </div>

                            <div class="form-element">
                                <input type="text" name="address" placeholder="Address" required>
                            </div>

                            <div class="form-element">
                                <input type="number" name="contact" placeholder="Contact No" pattern="[0-9]{10}" required>
                            </div>
                            <!-- <div class="form-element">
                                <button>Register</button>
                            </div> -->
                        </div>

                        <div class="tab-body">
                            <div class="form-element">
                                <input type="text" name="username" placeholder="Username" required>
                            </div>

                            <div class="form-element">
                                <input type="password" name="pass" id="password" placeholder="Password" required>
                            </div>

                            <div class="form-element">
                                <input type="password" name="confirmPass" id="confirm_password" placeholder="Confirm Password" required>
                            </div>

                            <div class="form-element-checkbox">
                                <input type="checkbox" name="" id="policy">
                                <p>Agree to our <a href="">Terms & conditions</a> </p>
                            </div>

                            <!-- <div class="form-element">
                                <button>Sign Up</button>
                            </div> -->
                            <input type="submit" value="Sign up" name="signUp" class="submit-btn" id="submit" onmouseover="validatePass()">
                        </div>
                    </div>
                </div>
            </span>
        </span>
    </form>

    <!-- RANUJA -->


    <!---Footer--->
    <footer>
        <div class="row">
            <div class="col">
                <img src="../img/logo2.png" class="flogo">
                <p id="ftr">Our clients are our values. We serve our best for our clients. We are the most trusted and renowned partners. World premium Insurance coverages for all types of vehicles. We offer what you want. Let us serve you for a better tomorrow.</p>
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
    <script type="text/javascript" src="signUp.js"></script>
</body>

</html>