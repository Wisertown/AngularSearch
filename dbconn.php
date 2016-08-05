<?php
$servername = "localhost";
$username = "projxatp_rooter";
$password = "Rooter!@";
$table = "projxatp_cars";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>