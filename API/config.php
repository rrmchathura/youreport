<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accidentsystem";

$API_KEY="AIzaSyCLLFhjGtokLTy7xIaGAzRzOhaLyyN3350";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>