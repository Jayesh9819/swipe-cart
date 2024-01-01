<?php
$servername = "localhost";
$usernames = ["u114668675_swipecart", "evms1ryy46do"];
$password = "Hen0z@2023";
$dbname = "u114668675_swipecart";

// Initialize connection variable
$conn = null;

// Loop through each username
foreach ($usernames as $username) {
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if (!$conn->connect_error) {
        // If connection is successful, break the loop
        break;
    } else {
        // Print detailed error for debugging (remove in production)
        echo "Connection failed for $username: " . $conn->connect_error . "<br>";
    }
}

// Check the final connection status
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
