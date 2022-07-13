<?php
/*configuration*/
$servername = "localhost";
$username = "root";
$password = "";
$db = "final";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);               //connection object

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>