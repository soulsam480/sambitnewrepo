
<?php
$servername = "localhost";
$username = "id5582880_forms1";
$password = "samarendra480";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

