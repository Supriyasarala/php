
<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "useraccount";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE employee SET e_name='moe' WHERE e_id=105";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>