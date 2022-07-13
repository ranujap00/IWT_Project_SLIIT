<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname="final";

$conn = new mysqli($server, $username, $password, $dbname);
if($conn->connect_error)
    echo "Connection Failed";
else
    echo "Connection Successfull";

session_start();


if(isset($_POST["submit"])){
    if(!empty($_POST['fname'])&&!empty($_POST['birthday'])&&!empty($_POST['nic'])&&!empty($_POST['contact'])&&!empty($_POST['role'])&&!empty($_POST['address'])&&!empty($_POST['User'])&&!empty($_POST['pass'])){
        $fname= $_POST["fname"];
        $birthday =$_POST["birthday"];
        $nic = $_POST["nic"];
        $contact = $_POST["contact"];
		$role=$_POST["role"];
		$address = $_POST["address"];
        $User = $_POST["User"];
		$pass = $_POST["pass"];

		
		$query = "insert into employee(EID,E_name,E_NIC,E_address,DOB,E_contact,E_username,E_password, E_type) values('','$fname','$nic','$address','$birthday','$contact','$User','$pass','$role')";
		
		$run = $conn->query($query);
		
		if($run){
			echo "Form submitted !";
		}
		else{
			echo"Form not sumitted";
		}
		
	}
    else{
	    echo "Please fill all the fields"; 
    }
}

if(isset($_SESSION['userName'])){
	echo $_SESSION['userName'];
}

else
	header("Location: ../../../Sarindu/login.php");

// header("Location:adminxx.html");
// $conn->close();
	
?>


  
  