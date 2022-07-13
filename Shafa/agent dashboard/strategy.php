<?php
  include('../config.php');     
?>

<?php

  /*assigning values from form to variables*/
  $des =$_POST["des"];
  $comment = $_POST["comment"];
  $date = $_POST["date"];
  
  //insert values
  $sql = "insert into marketing_strategy(No,Description,Comment,Date)values ('','$des','$comment','$date')";  //query string
  
  //execute the query
  if ($conn->query($sql)){
	  echo "Your data has been recorded";
	  header("Location:agentdashboard.php");
  }
  else {
	  echo "Error in recording to your data";
  }
  
  //close the connection
  mysqli_close($conn);
?>