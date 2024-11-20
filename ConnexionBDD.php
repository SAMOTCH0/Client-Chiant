<?php
$servername = "10.20.5.70:3306";
$username = "root";
$password = "admin1234";
$dbname = "Formulaire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn -> close();
?>