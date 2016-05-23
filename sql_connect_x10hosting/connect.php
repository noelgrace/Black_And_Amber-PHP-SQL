<?php
$servername = "localhost";
$username = "noelgrac";
$password = "0chosen2";
$dbname = "noelgrac_BlackAndAmber";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>