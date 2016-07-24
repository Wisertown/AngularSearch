<?php
$servername = "localhost";
$username = "root";
$password = "root";
$table = "Pangular";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>