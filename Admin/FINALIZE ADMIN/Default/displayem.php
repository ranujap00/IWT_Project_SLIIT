<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname="final";


$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT EID,E_name,E_NIC FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["EID"]. " - Name: " . $row["E_name"]. " - NIC:" . $row["E_NIC"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>