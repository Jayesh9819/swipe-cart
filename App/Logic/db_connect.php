<?php
$servername = "localhost";
$username = "u114668675_root";
$password = "Swipecart@2023";
$dbname = "u114668675_swipcart";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
