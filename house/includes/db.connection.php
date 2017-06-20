<?php
$servername = "localhost";
$username = "app";
$password = "1234";
$db = "house";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
