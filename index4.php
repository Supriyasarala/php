<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "useraccount";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT e_id, e_name FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["e_id"]. " - Name: " . $row["e_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>