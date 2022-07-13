<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname="final";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT NIC,c_name,c_email FROM customer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "NIC: " . $row["NIC"]. " - Name: " . $row["c_name"]. " - Email" . $row["c_email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>