<?php
/*includes the configuration file*/
  include_once'config.php';     
?>

<?php
if(isset($_GET["submit"])){
  /*assigning values from form to variables*/
  $des =$_GET["des"];
  $comment = $_GET["comment"];
  $date = $_GET["date"];
  
  //insert values
  $sql = "insert into marketing_strategy(No,Description,Comment,Date)values ('','$des','$comment','$date')";  //query string
  
  //execute the query
  if (mysqli_query($conn,$sql)){
	  echo "Your data has been recorded";
	  header("Location:agentdashboard.php");
  }
  else {
	  echo "Error in recording to your data";
  }
} 
  //close the connection
  mysqli_close($conn);
?>