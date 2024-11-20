<?php
$servername = "10.20.5.70:3306";
$username = "root";
$password = "admin1234";
$dbname = "Formulaire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>