<?php
/*configuration file*/
include_once'config.php';
?>

<?php
$No = $_GET['id'];
/*query to delete the record from database*/
 $query = "delete from marketing_strategy where No='$No'"; 
 
/*deletion of record*/
  if (mysqli_query($conn,$query)){
	  echo "Record deleted successfully!";
	  header("Location:agent dashboard/agentdashboard.php"); /*Redirects to the agent dashboard*/
  }
  /*happens if there was an error in deleting a record*/
  else {
	  echo "<script>alert('Error caused when deleting record!')</script>";
  }
  mysqli_close($conn);
?>