<!--includes configuration file-->
<?php
// session_start();
include_once'../config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent</title>
    <link rel="stylesheet" href="agentdashboard.css">
    <script src="https://kit.fontawesome.com/344646239b.js"></script>
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type="javascript" src="text/javascript.js"></script>
</head>
<body>
    <!---Header--->
    <section class="header">
        <nav>
            <!--navigation top buttons-->
            <a href="../../Sarindu/index.html"><img src="../img/logo2.png"></a>
            <h1 class="company-name">ABC INSURANCE</h1>
            <div>
                <ul>
                    <li><a href="../../Sarindu/index.html"><button class="topbtn-log">LOG OUT</button></a></li>
                    <img class="profile"src="../img/dp.png" alt="profile" />
                </ul>
            </div>
        </nav>
        <br />
        <br />
        <hr>
        <nav>
            <!--navigation bar-->
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
            <!--search bar-->
            <div class="search">
                <input class="srch" type="search" name="" placeholder="Search services">
                <a href="#"><button class="sbtn">Search<img class="srch-icon" src="../img/search_icon.png"></button></a>
            </div>
            </ul>
            </div>
        </nav>
    </section>
   
    <!--Dashboard-->
    <center>
        <h1 class="welcome">Welcome back</h1>
    </center>

    <section class="dashboard">
	
        <div style="float:right;">
		<!--displays the current date on button click-->
            <img src="../img/calendar.png" /><h2>Date:</h2>
            <h2 id="day"></h2>
            <button class="date" onclick="displayDate()">GET DATE</button>
        </div> 
		
        <!--displays the personal details-->
        <div style="width:600px; margin:10px; padding:5px;">
        <fieldset>
        <legend>Personal Details</legend>
        <img src="../img/dp.png" alt="profile" style="width:150px; float:right; margin: 5px; height:150px;"/>
		<div>
		<br>
        <h3>Employee ID: 002</h3>
		<br>
        <h3>Name: Tavish Asanka</h3>
		<br>
        <h3>NIC: 1234567890</h3>
		<br>
        <h3>Address: 25/2 Havelock,Rd,Colombo</h3>
		<br>
        <h3>Date of birth: 1985-12-02</h3>
		<br>
        <h3>Contact No: 0778845362</h3>
        </fieldset>
		</div>
        </div>
		
        <!--can adjust the commitments for the day or working time - cancellations, commits and claims-->
            <div class="commitments">
                <input class="commits1" type="number" value="0" />
                <input class="commits2" type="number" value="0" />
                <input class="commits3" type="number" value="0" />
                <h3>Commits</h3>&nbsp;&nbsp;
                <h3>Claims</h3>&nbsp;&nbsp;
                <h3>Cancellations</h3>
            </div>
			
			<!--displays marketing strategy form on button click-->
			<button class="other-btn" onclick="displayForm()" >Add new marketing strategy</button>
			<img class="marketing" src="../img/strategy.jpg" alt= "marketing strategy" style="width:680px; height:220px;">
			<div id="form">
			
			<!--form-->
			<form class="strategy" method="POST" action="strategy.php">
	   
	            Description:
	            <textarea name= "des" placeholder="Description" rows="2" cols="50" required></textarea>
	            <br>
	            <br>
	            Comment:
	            <textarea name= "comment" placeholder="Description" rows="2" cols="50"></textarea>
	            <br>
	            <br>
	            Date:
	           <input name="date" type="date" required>
	   
	           <input class="date" name="submit" type="submit" value="Add new strategy">
	           </form>
			</div>
			<br>
			 
			 <!--text area to input the name of the file directory to read-->
			 <form action="../readFile.php" method="POST">
			 <textarea name="filename" rows="2" required></textarea>
			 <input type="submit" class="file-btn" value="Read file"/>
			 </form>
			 
			 
			 <!--displays the daily tasks to be done-->
            <div>
                <h2>Daily Tasks</h2>
				
                <table class="table1">
                    <tr>
                        <th>Task</th>
                        <th>Activity</th>
                        <th>Comment</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Check number of claims</td>
                        <td>Alter claim number if approved</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Check customer inquiry</td>
                        <td>Reply and attach files</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Create new marketing strategy</td>
                        <td>Check if necessary</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Update records</td>
                        <td>check database</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Determine market rates</td>
                        <td>Record them</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>Make presentations</td>
                        <td>Attend meetings</td>
                    </tr>
                </table>
            </div>
	<br>
	
	<!--displays the graph-->
	<div id="Graph"></div>
	<br>
        <input class="data1" type="text" value="57" id="val1">
        <input  class="data2" type="text" value="32" id="val2">
        <input class="data3" type="text" value="11" id="val3">
		
        <button class="chart-btn" onclick="chart()">Display chart</button>
    
	<!--displays the data from marketing strategy table-->
     <h2>Marketing Strategies</h2>
	 
    <table class="table2">
    <tr>    <!--table row-->
	  <th>Strategy No</th>
      <th>Description</th>            
      <th>Comment</th>
	  <th>Date</th>
	  <th>Delete</th>
    </tr>
	
      <?php
	  /*sql query to get the values from the table and print*/
	  
	    $sql = "select * from marketing_strategy";
		
	    $details = $conn->query($sql);
		
		if ($details->num_rows>0){
			/*fetches the details from the database and displays*/
			while($row =$details->fetch_assoc()){
				echo "<tr><td>".$row["No"]."</td><td>".$row["Description"]."</td><td>"
				.$row["Comment"]."</td><td>".$row["Date"]."</td>";
			    echo"<td><a href='../deleteEntry.php?id=$row[No]'><input type='submit' class='tbl-btn' value='Delete'/></a></td></tr>";
			}
		}
		else {
			echo "Table is empty";
		}
		
		echo "</table>";
		//close the connection
		$conn->close();
	  ?>
	  
    </section>
    <!---Footer--->
    <footer>
        <div class="row">
            <div class="col">
                <img src="../img/logo2.png" class="flogo" alt="logo">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
                    make a type specimen book.It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </p>
            </div>
            <div class="col">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="index.html">ABOUT US</a></li>
                    <li><a href="index.html">SERVICES</a></li>
                    <li><a href="index.html">FEEDBACK</a></li>
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
                    <a href="https://www.facebook.com/"><img class="social-icon" src="../img/fb.png" alt="facebook icon"></a>
                    <a href="https://www.twitter.com/"><img class="social-icon" src="../img/twitter.png" alt="twitter icon"></a>
                    <a href="https://www.instagram.com/"><img class="social-icon" src="../img/insta.png" alt="instagram icon"></a>
                    <a href="https://www.linkedin.com/"><img class="social-icon" src="../img/linkedin.png" alt="linkedin icon"></a>
                </div>
            </div>
        </div>
        <hr>
        <p class="copyright">© 2021 ABC Insurance. All Rights Reserved</p>
    </footer>
<script src="javascript.js"></script>
</body>
</html>