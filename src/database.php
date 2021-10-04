<?php
$servername = "mysqlserverksu123.database.windows.net";
$username = "azureuser";
$password = "sample!23";
$dbname = "mySampleDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>