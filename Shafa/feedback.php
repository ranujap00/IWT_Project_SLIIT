<?php
  include('config.php');       //both are in same folder so can directly state it.
?>

<?php
  $name= $_POST["name"];
  $des =$_POST["feedback"];
  $rating = $_POST["rating"];
  
  //insert values
  $sql = "insert into feedback(ID,Name,Feedback,Ratings)values ('','$name','$des','$rating')";  //query string
  
  //execute the query
  if (mysqli_query($conn,$sql)){
	  echo "<script>alert('your response has been submitted successfully')</script>";
	  header("Location:../Sarindu/index.html");
  }
  else {
	  echo "<script>alert('Error! Your response was not sent')</script>";
  }
  
  //close the connection
  mysqli_close($conn);
?>