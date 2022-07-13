<?php  
	   $server = "localhost";
     $username = "root";
     $password = "";
     $dbname="final";
 
     $conn = new mysqli($server, $username, $password, $dbname);

      if(isset($_GET["submit"])){
        $account = $_GET["accountID"];

        $query = "delete from employee where EID = '$account'"; 
    

        if (mysqli_query($conn,$query))
          echo "Account ID = ".$account."deleted successfully!";

        else 
          echo "error!cannot delete account";
      }
      header("Location:adminxx.html");
     mysqli_close($conn);
?>