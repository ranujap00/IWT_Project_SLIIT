<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="vReg.css">
    <?php
        include("vRegistration.php");
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
    <br><br>
    <h2 class="main-topic">Vehicle Registration</h2>
    <span class="main">
        <form action="vRegistration.php" method="POST">
            <fieldset>
                <br>
                <center>
                    <div class="form-top">
                        <!-- https://www.youtube.com/watch?v=GDh9uToZkYg -->
                        <div class="radio">
                            <input type="radio" name="reg-cover" id="comprehensive" class="radio_input"
                                onclick="changeContent('comprehensive')" value="comprehensive">
                            <label for="comprehensive" class="radio_label">Comprehensive</label>

                            <input type="radio" name="reg-cover" id="thirdParty" class="radio_input"
                                onclick="changeContent('thirdParty')" value="third party">
                            <label for="thirdParty" class="radio_label">Third Party</label>

                            <input type="radio" name="reg-cover" id="PIP" class="radio_input"
                                onclick="changeContent('PIP')" value="personal insurance protection">
                            <label for="PIP" class="radio_label">PIP</label>
                        </div>
                        <!-- https://www.youtube.com/watch?v=GDh9uToZkYg -->
                    </div>
                </center>
                <hr>

                <div class="form-content">
                    <div class="col-1">
                        <div class="input-container">
                            <select name="vType" id="Vtype" required>
                                <option value="" hidden id="drop">Select Vehicle Type</option>
                                <option value="private">Private</option>
                                <option value="commercial">Commercial</option>
                                <option value="motor-cycle">Motor Cycle</option>
                                <option value="threewheel">Threewheel</option>
                            </select>
                        </div>
                        <div class="input-container">
                            <input type="text" name="vRegNo" placeholder="Vehicle Registration No." required><br>
                        </div>

                        <div class="input-container" class="input-container">
                            <input type="number" name="marketValue" placeholder="Market Value"><br>
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="input-container">
                            <input type="number" name="manuYear" placeholder="Manufactured Year" required><br>
                        </div>


                        <div class="input-container">
                            <input type="text" name="makeModel" placeholder="Make and Model" required><br>
                        </div>

                        <div class="input-container">
                            <select name="fType" id="Fueltype" required>
                                <option value="" hidden id="drop">Select Fuel Type</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electric</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="multiselect">
                    <div class="selectBox" onclick="showCheckboxes()">
                        <select>
                            <option>Select Extra Covers</option>
                        </select>
                        <div class="overSelect"></div>
                    </div>
                    <div id="checkboxes">
                        <label for="one">
                            <input type="checkbox" name="extraCover[]" value="Zero depreciation cover">Zero depreciation cover</label>
                        <label for="two">
                            <input type="checkbox" name="extraCover[]" value="Engine protection cover">Engine protection cover</label>
                        <label for="three">
                            <input type="checkbox" name="extraCover[]" value="No claim bonus protection cover"/>No claim bonus protection
                            cover</label>
                        <label for="four">
                            <input type="checkbox" name="extraCover[]" value="Roadside assistance cover">Roadside assistance cover</label>
                        <label for="five">
                            <input type="checkbox" name="extraCover[]" value="Return to invoice cover">Return to invoice cover</label>
                        <label for="six">
                            <input type="checkbox" name="extraCover[]" value="Daily alowance cover">Daily alowance cover</label>
                        <label for="seven">
                            <input type="checkbox" name="extraCover[]" value="Passenger cover">Passenger cover</label>
                        <label for="eight">
                            <input type="checkbox" name="extraCover[]" value="Consumables cover">Consumables cover</label>
                        <label for="nine">
                            <input type="checkbox" name="extraCover[]" value="Tyre protect cover">Tyre protect cover</label>
                        <label for="ten">
                            <input type="checkbox" name="extraCover[]" value="Key replacement cover">Key replacement cover</label>
                    </div>
                </div>
                    <input type="submit" value="Register Now" class="btn-submit" name="submit">
                </fieldset>
        </form>
            
        
        <div class="description">
            <h3 id="para-heading"></h3><br>
            <img src="../img/vReg3.jpg" alt="" id="para-img">
            <p id="para-main">Registration of vehicles is done here. All vehicles which need to insure must register. You may enter the details of the vehicle such as vehicle type, year of manufacture, vehicle registration number, make and the model of the vehicle, market value, fule type of vehicle, and the other needed information. Please make sure to verify the details with proper and approved documents before entering the details. The person who enters the information will be fully accountable for the accuracy of the vehicle information.</p>
            <p id="para-list"></p>
            <p id="more-details"><a href="../../Sarindu/Services.html" id="anchor"></a></p>
        </div>
    </span>

    
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
    <script type="text/javascript" src="vReg.js"></script>

</body>

</html>