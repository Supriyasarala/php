<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "useraccount";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT e_name,d_name,salary,city from employee e INNER JOIN details d ON e.e_id=d.e_id INNER JOIN department dp ON dp.d_id=d.d_id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo " " . $row["e_name"]. " " . $row["d_name"]." " . $row["salary"]." " . $row["city"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>