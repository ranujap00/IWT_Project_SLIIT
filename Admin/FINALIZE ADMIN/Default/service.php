<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname="final";

$conn = new mysqli($server, $username, $password, $dbname);


if(isset($_POST["submit"])){

    if(!empty($_POST['nservice'])&&!empty($_POST['ndate'])&&!empty($_POST['edate'])){
        $nservice= $_POST["nservice"];
        $ndate =$_POST["ndate"];
        $edate = $_POST["edate"];
 
		$query = "insert into service(SID,Service,Sdate,Edate) values('','$nservice','$ndate','$edate')";
		
		$run = mysqli_query($conn,$query) or die(mysqli_error());
		
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

else
	echo "Large ERROR";
	
header("Location:adminxx.html");
$conn->close();
?>
